<?php


namespace App\Http\Repositories\Impl;


use App\Http\Repositories\Eloquent\EloquentRepository;
use App\Http\Repositories\UserRepositoryInterface;
use App\User;

class UserEloquentRepository extends EloquentRepository implements UserRepositoryInterface
{

    function getModel()
    {
        return User::class;
    }
}
