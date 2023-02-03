<?php

namespace App\Http\Controllers\Admin\Ua\Category;

use App\Http\Controllers\Controller;
use App\Models\Ua\Category;

class EditController extends Controller
{
    public function __invoke(Category $category)
    {
        return view('admin.ua.category.edit', compact('category'));
    }
}
