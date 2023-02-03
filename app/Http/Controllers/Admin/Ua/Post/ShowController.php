<?php

namespace App\Http\Controllers\Admin\Ua\Post;

use App\Models\Ua\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {

        return view('admin.ua.post.show', compact('post'));
    }
}
