<?php

namespace App\Http\Controllers\Admin\Ua\Category;

use App\Http\Controllers\Controller;
use App\Models\Ua\Category;

class ShowController extends Controller
{
    public function __invoke(Category $category)
    {

        return view('admin.ua.category.show', compact('category'));
    }
}
