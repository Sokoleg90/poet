<?php

namespace App\Http\Controllers\Ru\Post\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Ru\Post;
use App\Models\Ru\Comment;
use Carbon\Carbon;


class StoreController extends Controller
{
    public function __invoke(Post $post, StoreRequest $request)
    {
        $data = $request->validated();

        $data['post_id'] = $post->id;
        Comment::create($data);
        Carbon::setLocale('ru_RU');
        return redirect()->route('ru.post.show', $post->id);
    }
}
