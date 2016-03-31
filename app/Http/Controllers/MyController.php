<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;


use App\User;
use App\ErDiagram;
class MyController extends Controller
{
    public function register()
    {
        User::create(\Request::all());
    }

    public function login(){
        $username = \Request::input('username');
        $password = \Request::input('password');

        $user = User::where('username', '=', $username)->firstOrFail();

        //dd($user);
        if ($user->password == $password) {
            return \Response::json($user->id);
        } else {
            return \Response::json(['message' => 'Login failed.'], 403);
        }
    }

    public function saveER(){
        ErDiagram::create(\Request::all());
    }

    public function getER($id){
        $er = ErDiagram::findOrFail($id);

        return \Response::json($er);
    }
}
