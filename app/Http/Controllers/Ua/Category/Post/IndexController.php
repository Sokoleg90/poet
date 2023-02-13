<?php

namespace App\Http\Controllers\Ua\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Ua\Category;
use App\Models\Ua\Post;
use Carbon\Carbon;


class IndexController extends Controller
{
    public function __invoke(Category $category, Post $post)
    {
        $posts = $category->posts()->paginate(4);
        $categories = Category::all();
        $randomPosts = Post::get()->random(4);
        $date = Carbon::parse($post->created_at);
        return view('ua.category.post.index', compact('posts', 'categories', 'randomPosts', 'date'));
    }
}
