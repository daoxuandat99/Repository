<?php


namespace App\Http\Service\Impl;


use App\Http\Repositories\UserRepositoryInterface;
use App\Http\Service\UserServiceInterface;

class UserServiceImpl implements UserServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->index();
        return $users;
    }
}
