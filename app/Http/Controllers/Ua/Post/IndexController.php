<?php

namespace App\Http\Controllers\Ua\Post;

use App\Http\Controllers\Controller;
use App\Models\Ua\Category;
use App\Models\Ua\Post;


class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(6);
        $categories = Category::all();
        return view('ua.post.index', compact( 'categories', 'posts', 'randomPosts'));
    }
}
