<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class HomeController extends Controller
{
    //
    public function index(){
        $users = User::get();
        $duplicate_users = User::whereColumn('first_name', 'last_name')->get();
        $unique_users = User::whereColumn('first_name', '!=', 'last_name')->get();
        $data = [
            'users' => $users,
            'duplicate_users' => $duplicate_users,
            'unique_users' => $unique_users
        ];

        return $data;
    }
}
