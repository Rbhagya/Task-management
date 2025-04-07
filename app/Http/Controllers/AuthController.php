<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AuthController;
use App\Models\User;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('users.index', compact('users'));
    }

}

