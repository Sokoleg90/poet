<?php

namespace App\Http\Controllers\Ua\Post\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Ua\Comment;
use App\Models\Ua\Post;


class StoreController extends Controller
{
    public function __invoke(Post $post, StoreRequest $request)
    {
        $data = $request->validated();

        $data['post_id'] = $post->id;
        Comment::create($data);
        return redirect()->route('ua.post.show', $post->id);
    }
}
