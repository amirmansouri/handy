<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use function Livewire\str;

class ProviderController extends Controller
{
    public function index()
    {
        $provider = User::all();
        $provider_affiche=User::where('role_as','provider')->get();
      return view ('provider.index',compact('provider_affiche'))->with('provider', $provider);
    }


    public function create()
    {
        return view('provider.create');
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
            'role_as' => $request->role_as ?? 'provider',



        ]);


        return redirect('provider')->with('flash_message', 'Provider Addedd!');

    }


    public function show($id)
    {
        $provider = User::find($id);
        return view('provider.show')->with('provider', $provider);
    }


    public function edit($id)
    {
        $provider = User::find($id);
        return view('provider.edit')->with('provider', $provider);
    }


    public function update(Request $request, $id)
    {
        $provider = User::find($id);
        $input = $request->all();
        $provider->update($input);
        return redirect('provider')->with('flash_message', 'Provider Updated!');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('provider')->with('flash_message', 'Provider deleted!');
    }
}
