<?php

namespace App\Http\Controllers\Admin\Ua\Post;

use App\Http\Requests\Admin\Ua\Post\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->Store($data);

        return redirect()->route('admin.ua.post.index');
    }
}
