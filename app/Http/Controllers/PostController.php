<?php

namespace App\Http\Controllers;

use App\Service\ServiceInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    public function __construct(ServiceInterface $postService)
    {
        $this->postService = $postService;
    }
}
