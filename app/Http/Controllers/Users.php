<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Users extends Controller
{
    public function getUsers()
    {
        $users = User::all();

        $response = response($users)
            ->header('Content-Type', 'application/json');

        return $response;
    }
}
