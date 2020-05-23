<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{

    public function show()
    {
//        $post = DB::table('posts')->where('slug', $slug)->first();
//        $post = Post::where('slug', $slug)->first();

//        if (! $post) {
//            abort(404);
//        }

//        return view('post', [
//            'post' => $post
//        ]);

        return 'hui';
    }


}

