<?php


namespace App\Service;


interface ServiceInterface
{
public function getAll();
public function getById();
public function delete();
public function update();
public function create();
public function deleteAll();

}