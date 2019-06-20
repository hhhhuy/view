<?php


namespace App\Repositories;


interface RepositoriesInterface
{
    public function getAll();
    public function getById($id);
    public function create($object);
    public function delete($id);
    public function update($object);
    public function deleteAll($id);
}