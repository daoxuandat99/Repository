<?php


namespace App\Http\Repositories\Eloquent;


use App\Http\Repositories\RepositoryInterface;


abstract class EloquentRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function index()
    {
        return $this->model->all();
    }

    public function create($obj)
    {
        $obj->save();
    }


}
