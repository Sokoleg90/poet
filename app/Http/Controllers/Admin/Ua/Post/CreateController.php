<?php

namespace App\Http\Controllers\Admin\Ua\Post;

use App\Models\Ua\Category;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('admin.ua.post.create', compact('categories'));
    }
}
