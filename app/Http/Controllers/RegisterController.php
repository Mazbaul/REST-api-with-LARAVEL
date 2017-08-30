<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Http\requests\StoreUserRequest;


class RegisterController extends Controller
{
    public function register(StoreUserRequest $request)
    {
      $user = new User();
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);



    $user->save();


    }


}
