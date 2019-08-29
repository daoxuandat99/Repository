<?php


namespace App\Http\Repositories;


interface RepositoryInterface
{
    public function index();
    public function create($obj);
}
