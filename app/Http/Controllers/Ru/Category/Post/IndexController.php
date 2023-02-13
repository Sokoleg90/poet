<?php

namespace App\Http\Controllers\Ru\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Ru\Category;
use App\Models\Ru\Post;
use Carbon\Carbon;


class IndexController extends Controller
{
    public function __invoke(Category $category, Post $post)
    {
        $posts = $category->posts()->paginate(4);
        $categories = Category::all();
        $randomPosts = Post::get()->random(4);
        Carbon::setLocale('ru_RU');
        $date = Carbon::parse($post->created_at);
        return view('ru.category.post.index', compact('posts', 'categories', 'randomPosts', 'date'));
    }
}
