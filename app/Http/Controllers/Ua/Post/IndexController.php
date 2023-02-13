<?php

namespace App\Http\Controllers\Ua\Post;

use App\Http\Controllers\Controller;
use App\Models\Ua\Category;
use App\Models\Ua\Post;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function __invoke(Post $post)
    {
        $posts = Post::paginate(4);
        $date = Carbon::parse($post->created_at);
        Carbon::setLocale('uk_UK');
        $randomPosts = Post::get()->random(4);
        $categories = Category::all();

        return view('ua.post.index', compact( 'categories', 'posts', 'randomPosts', 'date'));
    }
}
