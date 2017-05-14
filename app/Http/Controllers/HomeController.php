<?php

namespace App\Http\Controllers;

use App\Contracts\Blog\Repository as Blog;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * @param \App\Contracts\Blog\Repository $blog
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Blog $blog)
    {
        $data['blogPosts'] = Cache::remember('latestBlogPosts', 30, function () use ($blog) {
            return $blog->latest();
        });

        return view('home.index', $data);
    }
}
