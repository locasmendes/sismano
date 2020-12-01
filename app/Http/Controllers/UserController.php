<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function doLogin(Request $request){
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed...
        return redirect()->intended('home');
    }
}

   public function doRegister(Request $request){
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->save();
       return dd('Registrado.');
   }
}
