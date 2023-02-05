<?php

namespace App\Http\Controllers\Ru\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Ru\Category;
use App\Models\Ru\Post;


class IndexController extends Controller
{
    public function __invoke(Category $category)
    {
        $posts = $category->posts()->paginate(6);
        $categories = Category::all();
        $randomPosts = Post::get()->random(6);
        return view('ru.category.post.index', compact('posts', 'categories', 'randomPosts'));
    }
}
