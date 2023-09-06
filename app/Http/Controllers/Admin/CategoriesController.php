<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Categories.Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        try {
            $category = Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name)
            ]);
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
                'data' => $category,
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name)
            ]);
            return response()->json([
                'status' => JsonResponse::HTTP_OK,
                'data' => $category,
            ], JsonResponse::HTTP_OK);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => JsonResponse::HTTP_NOT_FOUND,
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_NOT_FOUND);
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
            Category::findOrFail($id)->delete();
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

    public function datatable()
    {
        $categories = Category::query();
        if ($categories) {
            return Datatables::of($categories)->editColumn('created_at', function ($record) {
                return $record->created_at->format('d M Y');
            })->addColumn('actions', function ($record) {
                $actions = '<div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" id="edit_category" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" id="delete_category" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>';
                return $actions;
            })->rawColumns(['actions'])->addIndexColumn()->make(true);
        }
    }
}
