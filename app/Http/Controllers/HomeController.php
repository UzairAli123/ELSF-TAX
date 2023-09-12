<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestPosts = Blog::with('categories')->latest()->take(3)->get();
        return view('home', compact('latestPosts'));
    }

    public function getBlogs(Request $request)
    {
        $keyword = $request->query('keyword');
        $filterCategory = $request->query('category');
        $blogs = Blog::where(function ($query) {
            if (request()->input('keyword')) {
                $keywords = explode(' ', request()->input('keyword'));
                foreach ($keywords as $keyword) {
                    $query->where(function ($subQuery) use ($keyword) {
                        $subQuery->where('name', 'like', '%' . $keyword . '%')
                            ->orWhereHas('categories', function ($subQuery) use ($keyword) {
                                $subQuery->where('name', 'like', '%' . $keyword . '%');
                            })->orWhere('description', 'like', '%' . $keyword . '%');
                    });
                }
            }
            if (request()->input('category')) {
                $query->whereHas('categories', function ($subQuery) {
                    $subQuery->where('slug', request()->input('category'));
                });
            }
        })->with('categories')->latest()->paginate(10);
        $latestPosts = Blog::latest()->take(4)->get();
        $categories = Category::get();
        return view('blogs', compact('blogs',  'keyword', 'latestPosts', 'categories', 'filterCategory'));
    }

    public function getBlogDetail($uuid)
    {
        try {
            $blog = Blog::with('categories')->where('uuid', $uuid)->firstOrFail();
            $latestPosts = Blog::with('categories')->latest()->take(3)->get();
            return view('blog-detail', compact('blog', 'latestPosts'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
