<?php


namespace App\Service;


use App\Repositories\PostRepositoryInterface;

class PostServiceImpl implements ServiceInterface
{
protected $postService;

public function __construct(PostRepositoryInterface $postRepository)
{
    $this->postService = $postRepository;
}

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function getById()
    {
        // TODO: Implement getById() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function deleteAll()
    {
        // TODO: Implement deleteAll() method.
    }
}