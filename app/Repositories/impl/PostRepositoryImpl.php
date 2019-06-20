<?php


namespace App\Repositories\impl;


use App\Post;
use App\Repositories\PostRepositoryInterface;

class PostRepositoryImpl extends Repositoryimpl implements PostRepositoryInterface
{
public function getModel()
{
    return Post::class;
}
    public function getByName()
    {
        // TODO: Implement findByName() method.
    }
}