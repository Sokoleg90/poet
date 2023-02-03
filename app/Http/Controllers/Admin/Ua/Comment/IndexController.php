<?php

namespace App\Http\Controllers\Admin\Ua\Comment;

use App\Http\Controllers\Controller;
use App\Models\Ua\Comment;


class IndexController extends Controller
{
    public function __invoke()
    {
        $comments = Comment::all();
        return view('admin.ua.comment.index', compact('comments'));
    }
}
