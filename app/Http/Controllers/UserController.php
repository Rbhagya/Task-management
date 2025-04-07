<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserController;
use App\Models\User;


use Illuminate\Http\Request;

class UserController extends Controller
{

    public function loginUser()
    {
        return view('tasks.login');
    }

  
    public function StoreUser(Request $request)
    {
        $request->validate(['title' => 'required']);
        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'Task created successfully.');
    }

}

