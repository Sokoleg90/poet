<?php

namespace App\Http\Controllers\Admin\Ua\Comment;

use App\Http\Controllers\Controller;
use App\Models\Ua\Comment;


class EditController extends Controller
{
    public function __invoke(Comment $comment)
    {
        return view('admin.ua.comment.edit', compact('comment'));
    }
}
