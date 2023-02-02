<?php

namespace App\Models\Ua;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ua_categories';
    protected $guarded = false;

    public function posts(){
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}
