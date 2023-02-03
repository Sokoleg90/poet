<?php

namespace App\Http\Controllers\Admin\Ua\Category;

use App\Http\Controllers\Controller;
use App\Models\Ua\Category;

class DestroyController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.ua.category.index');
    }
}
