<?php

namespace App\Http\Controllers\Admin\Ua\Post;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Ua\Post;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post = $this->service->Update($data, $post);

        return redirect()->route('admin.ua.post.show', compact('post'));
    }
}
