<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// use Illuminate\Http\Response;

class AuthController extends Controller
{
  public function register(RegisterRequest $request)
  { 
     $user =User::create((
      $request->only('first_name','last_name','email')
      )+ [
        'password' => bcrypt($request->password),
        'is_admin'=>1

      ]
    );
    return  response($user ,Response::HTTP_CREATED);
  }
} 
