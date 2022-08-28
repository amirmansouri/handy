<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return $request->user();
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $result= User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'role_as' => $request->role_as ?? 'user',
        ]);

      //  $token = $user->createToken('myapptoken')->plainTextToken;

      //  $response = [
      //      'user' => $user,
     //      'token' => $token
      //  ];

        return $result;
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($fields)){
            $user = Auth::user();
            $token = md5( time() ).'.'.md5($request->email);
            $user->forceFill([
                'api_token'=>$token,
            ])->save();
            return response()->json([
                'token'=>$token
            ]);

        }

        return response()->json([
              'message'=>'the producted credentialsdo not much '
        ]);

        }

        public function logout(Request $request) {
            $request->user()->forceFill([
                'api_token'=> null,
            ])->save();

            return response()->json(['message'=>'success' ]);
        }
        public function profile_update(Request $request)
        {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
            $user->lastname = $request->input('lastname');
       $user->lastname = $request->input('lastname');
            $user->code_zip = $request->input('code_zip');
            $user->number = $request->input('number');
            $user->adresse1 = $request->input('adresse1');
            $user->adresse2 = $request->input('adresse2');
            $user->country = $request->input('country');
            $user->state = $request->input('state');
            $user->city = $request->input('city');

       $user->update();
            return view('livewire.user.user-profile-component')->with('user', $user);



        }
}
