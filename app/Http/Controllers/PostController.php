<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();
        $posts = $user->posts;

        return view(
            'index',
            [
                'user' => $user,
                'posts' => $posts
            ]
        );
    }
    public function createPost()
    {
    }
}
