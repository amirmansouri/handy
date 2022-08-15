<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class user_simpleController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view ('user.index')->with('user', $user);
    }


    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {

        $request->all([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',





        ]);


        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'role_as' => $request->role_as ?? 'user',



        ]);


        return redirect('user')->with('flash_message', 'Provider Addedd!');

    }


    public function show($id)
    {
        $user = User::find($id);
        return view('user.show')->with('user', $user);
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit')->with('user', $user);
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('user')->with('flash_message', 'user Updated!');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('user')->with('flash_message', 'user deleted!');
    }
}
