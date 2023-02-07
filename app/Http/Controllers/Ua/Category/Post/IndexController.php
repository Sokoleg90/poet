<?php

namespace App\Http\Controllers\Ua\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Ua\Category;
use App\Models\Ua\Post;


class IndexController extends Controller
{
    public function __invoke(Category $category)
    {
        $posts = $category->posts()->paginate(6);
        $categories = Category::all();
        $randomPosts = Post::get()->random(6);
        return view('ua.category.post.index', compact('posts', 'categories', 'randomPosts'));
    }
}
