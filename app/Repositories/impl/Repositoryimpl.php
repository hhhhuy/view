<?php


namespace App\Repositories\impl;


use App\Repositories\RepositoriesInterface;

abstract class Repositoryimpl implements RepositoriesInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
    }

    public function getById($id)
    {
    }

    public function create($object)
    {
    }

    public function delete($id)
    {
    }

    public function update($object)
    {
    }

    public function deleteAll($id)
    {
    }
}