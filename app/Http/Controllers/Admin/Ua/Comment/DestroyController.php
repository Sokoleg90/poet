<?php

namespace App\Http\Controllers\Admin\Ua\Comment;

use App\Http\Controllers\Controller;
use App\Models\Ua\Comment;


class DestroyController extends Controller
{
    public function __invoke(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('admin.ua.comment.index');
    }
}
