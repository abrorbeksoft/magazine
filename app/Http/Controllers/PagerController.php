<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PagerController extends Controller
{
    public function home(Request $request)
    {
        $posts=Post::query();

        if ($request->has('sort'))
        {
            $posts->orderBy('title','desc');
        }

        if ($request->has('number'))
        {
            $posts->limit($request->number);
        }

        $posts=$posts->get();



        return view('post.post',compact('posts'));
    }
}
