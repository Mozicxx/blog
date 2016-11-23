<?php

namespace App\Http\Controllers;

//生成的控制器默认
//use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function home()
    {
        $users = ['Yang', 'Mozic'];
        return view('welcome', compact('users'));
    }
}
