<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {   
        User::create($request->only('name', 'email')
            + [
                'password' => bcrypt($request->input('password'))
            ]);
        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->only('name', 'email');
        $password = $request->input('password');
        if($password)
            $data['password'] = bcrypt($password);

        $user->update($data);
        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente.');
    }


}
