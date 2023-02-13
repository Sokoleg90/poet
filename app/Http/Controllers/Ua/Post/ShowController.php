<?php

namespace App\Http\Controllers\Ua\Post;

use App\Http\Controllers\Controller;
use App\Models\Ua\Post;
use Carbon\Carbon;


class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $date = Carbon::parse($post->created_at);
        Carbon::setLocale('uk_UK');
        return view('ua.post.show', compact('post', 'date'));
    }
}
