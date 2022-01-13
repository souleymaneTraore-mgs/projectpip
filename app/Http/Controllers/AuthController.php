<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //creation du controller pour l'autentification

    public function register(Request $request){
        $fields = $request->validate([
            'name' =>'required|string',
            'email'=>'reuired|string|unique:users,email',
            'password'=>'required|string|confirmed'

        ]);


        //check email before

        $user = User::where('email' $fields['email'])->first();

        //check password


        if(!$user || !Hash::check($fileds['password'], $user->password))
        {
            return response([
                'message' => 'Bad credentials'], 401);
        }


        /*$user = User::create([

            'name'=>$fields['name'],
            'email'=>$fields['email'],
            'password'=>bcrypt($fileds['password'])
        ]);*/


        $token = $user->createToken('myapptoken')->plainTextToken;
        $response = [

            'user'=>$user,
            'token'=>$token

        ];

        return response($response, 201);
    }



    public function logout (Request $request){

    auth()->user()->tokens()->delete();
    return [

        'message' =>'Logged out'

    ];


    }

}
