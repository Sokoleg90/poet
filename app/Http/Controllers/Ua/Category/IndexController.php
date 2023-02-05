<?php

namespace App\Http\Controllers\Ua\Category;

use App\Http\Controllers\Controller;
use App\Models\Ua\Category;


class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('ua.category.index', compact('categories'));
    }
}
