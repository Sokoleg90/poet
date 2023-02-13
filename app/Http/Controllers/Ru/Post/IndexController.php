<?php

namespace App\Http\Controllers\Ru\Post;

use App\Http\Controllers\Controller;
use App\Models\Ru\Category;
use App\Models\Ru\Post;
use Carbon\Carbon;


class IndexController extends Controller
{
    public function __invoke(Post $post)
    {
        $posts = Post::paginate(4);
        $randomPosts = Post::get()->random(4);
        $categories = Category::all();
        Carbon::setLocale('ru_RU');
        $date = Carbon::parse($post->created_at);
        return view('ru.post.index', compact('posts', 'randomPosts', 'categories', 'date'));
    }
}
