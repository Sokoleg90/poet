<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Ua\Category;
use App\Models\Ua\Post;
use App\Models\User;


class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['usersCount'] = User::all()->count();
        $data['postsCount'] = Post::all()->count();
        $data['ruPostsCount'] = \App\Models\Ru\Post::all()->count();
        $data['categoriesCount'] = Category::all()->count();
        $data['ruCategoriesCount'] = \App\Models\Ru\Category::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
