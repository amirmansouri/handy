<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HandymanController extends Controller
{

    public function index()
    {
        $handyman = User::all();
        $handyman_affiche=User::where('role_as','handyman')->get();
        return view ('handyman.index',compact('handyman_affiche'))->with('handyman', $handyman);
      //  return view ('handyman.index')->with('handyman', $handyman);
    }


    public function create()
    {
        return view('handyman.create');
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
            'role_as' => $request->role_as ?? 'handyman',
        ]);


        return redirect('handyman')->with('flash_message', '$handyman ajouter!');

    }


    public function show($id)
    {
        $handyman = User::find($id);
        return view('handyman.show')->with('handyman', $handyman);
    }


    public function edit($id)
    {
        $handyman = User::find($id);
        return view('handyman.edit')->with('handyman', $handyman);
    }


    public function update(Request $request, $id)
    {
        $handyman = User::find($id);
        $input = $request->all();
        $handyman->update($input);
        return redirect('handyman')->with('flash_message', 'handyman Updated!');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('handyman')->with('flash_message', 'handyman deleted!');
    }
}
