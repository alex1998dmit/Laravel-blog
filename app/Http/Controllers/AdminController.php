<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\User;
use App\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $posts_count = Post::get()->count();
        $users_count = User::get()->count();
        $tags_count = User::get()->count();
        $categories_count = Category::get()->count();
        return view('admin.dashboard')->with('posts_count', $posts_count)
                                      ->with('users_count', $users_count)
                                      ->with('tags_count', $tags_count)
                                      ->with('categories_count', $categories_count);
    }
}
