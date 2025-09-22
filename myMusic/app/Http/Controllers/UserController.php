<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function readUser(){
        $users = User::All();

        return view('User', compact('users'));


    }
}
