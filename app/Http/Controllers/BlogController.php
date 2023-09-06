<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Blogs.Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('Blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required'
        ], [
            'name.required' => 'Title field is required.',
            'category_id' => 'Catgory field is requird.'
        ]);

        try {
            $extension = $request->image->extension();
            $path = saveResizeImage($request->image, "images", 600, 500, $extension);
            Blog::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'image' => $path,
                'description' => $request->description
            ]);
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $categories = Category::get();
        return view('Blogs.edit', compact('categories', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required'
        ], [
            'name.required' => 'Title field is required.',
            'category_id' => 'Catgory field is requird.'
        ]);
        try {
            $blog->update([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'description' => $request->description
            ]);
            if ($request->hasFile('image')) {
                deleteFile($blog->image);
                $extension = $request->image->extension();
                $path = saveResizeImage($request->image, "images", 600, 500, $extension);
                $blog->update([
                    'image' => $path
                ]);
            }
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $blog->delete();
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
            ], JsonResponse::HTTP_OK);
        } catch (Exception $e) {
            return response()->json([
                'status' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    public function datatable()
    {
        $blogs = Blog::with('categories')->get();
        if ($blogs) {
            return Datatables::of($blogs)->editColumn('name', function ($record) {
                $image = $record->image ? getImageUrl($record->image) : asset('assets/img/placeholder.png');
                $name = '<div class="d-flex align-items-center">
                        <div style="border-radius: 4px;" class="pe-4">
                            <img src="' . $image . '" alt="' . $record->name . '" style="width:60px; height:60px; border-radius: 8px"/>
                        </div>
                        <div>' . $record->name . '</div>
                    </div>';
                return $name;
            })->editColumn('created_at', function ($record) {
                return $record->created_at->format('d M Y');
            })->editColumn('description', function ($record) {
                $description = strlen(strip_tags($record->description)) > 40 ? substr(strip_tags($record->description), 0, 40) . '...' : strip_tags($record->description);
                return $description;
            })->addColumn('category', function ($record) {
                return $record->categories->name;
            })->addColumn('actions', function ($record) {
                $actions = '<div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="' . route('admin.blogs.edit', ['blog' => $record->id]) . '">
                            <i class="bx bx-edit-alt me-1"></i> Edit
                        </a>
                        <a class="dropdown-item" id="delete_blog" href="javascript:void(0);">
                            <i class="bx bx-trash me-1"></i> Delete
                        </a>
                    </div>
                </div>';

                return $actions;
            })->rawColumns(['actions', 'category', 'name'])->addIndexColumn()->make(true);
        }
    }
}
