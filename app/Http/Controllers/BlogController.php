<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


/*
 * 1、Carbon 是什么
 * 2、paginate函数的作用
 * 3、config('blog.posts_per_page')中的内容
 * */
class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(config('blog.posts_per_page'));
        return view('blog.index', compact('posts'));
    }
/*
 * 1、Carbon 是什么
 * 2、paginate函数的作用
 * 3、config('blog.posts_per_page')中的内容
 * */

    public function showPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        return view('blog.post')->withPost($post);
    }



}
