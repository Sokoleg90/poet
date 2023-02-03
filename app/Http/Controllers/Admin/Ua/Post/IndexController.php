<?php

namespace App\Http\Controllers\Admin\Ua\Post;

use App\Models\Ua\Post;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('admin.ua.post.index', compact('posts'));
    }
}
