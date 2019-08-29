<?php

namespace App\Http\Controllers;

use App\Http\Service\UserServiceInterface;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->index();
        dd($users);
        return view('customer.index', compact('users'));
    }

}
