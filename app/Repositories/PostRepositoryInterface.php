<?php


namespace App\Repositories;


interface PostRepositoryInterface extends RepositoriesInterface
{
    public function getByName();
}