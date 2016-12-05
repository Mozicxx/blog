<?php

namespace App\Http\Controllers;

//生成的控制器默认
//use Illuminate\Http\Request;
use App\User;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends Controller
{
    public function home()
    {
        $users = ['Yang', 'Mozic'];
        return view('welcome', compact('users'));
    }

    public function login(Request $request)
    {
        exit('ccc');
    }

    public function register(Request $request)
    {
        exit('cccvv');
    }
}
