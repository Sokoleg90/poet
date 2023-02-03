<?php

namespace App\Http\Controllers\Admin\Ua\Post;

use App\Http\Controllers\Controller;
use App\Service\Ua\PostService;

class BaseController extends Controller
{

    public $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

}
