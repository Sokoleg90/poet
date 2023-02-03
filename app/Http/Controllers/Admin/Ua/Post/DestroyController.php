<?php

namespace App\Http\Controllers\Admin\Ua\Post;

use App\Models\Ua\Post;

class DestroyController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.ua.post.index');
    }
}
