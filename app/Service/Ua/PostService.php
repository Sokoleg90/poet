<?php

namespace App\Service\Ua;


use App\Models\Ua\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function Store($data)
    {
        try {
            DB::beginTransaction();
            $post = Post::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function Update($data, $post)
    {
        try {
            DB::beginTransaction();
            $post->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $post;
    }
}
