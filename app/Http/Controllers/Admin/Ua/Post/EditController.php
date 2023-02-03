<?php

namespace App\Http\Controllers\Admin\Ua\Post;

use App\Models\Ua\Category;
use App\Models\Ua\Post;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();
        return view('admin.ua.post.edit', compact('post', 'categories'));
    }
}
