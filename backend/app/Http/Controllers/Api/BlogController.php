<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Http\JsonResponse;

class BlogController extends Controller
{
    public function index()
{
    $blogs = Blog::where('is_published', true)
        ->select('id', 'title', 'slug', 'excerpt', 'thumbnail', 'category', 'published_at')
        ->orderByDesc('published_at')
        ->limit(20)
        ->get();

    return response()->json([
        'success' => true,
        'data' => $blogs,
    ]);
}
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return response()->json([
            'success' => true,
            'data' => $blog,
        ]);
    }
}
