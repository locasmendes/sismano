<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function doLogin(Request $request){
    $credentials = [$request->email, $request->password];
    dd($credentials);
   }
}
