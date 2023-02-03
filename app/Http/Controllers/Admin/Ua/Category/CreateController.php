<?php

namespace App\Http\Controllers\Admin\Ua\Category;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.ua.category.create');
    }
}
