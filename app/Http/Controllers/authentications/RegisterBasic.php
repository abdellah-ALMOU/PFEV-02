<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use App\Models\Administrateur;
use Illuminate\Http\Request;

class RegisterBasic extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-register-basic');
  }
    

  public function register()
  {

   return view('site.User.registerForm');

  }
  public function store(Request $request)
  {
    $compte = new Administrateur();
    
    $compte->name = $request->input('username');
    $compte->lastname = $request->input('lastname');
    $compte->email = $request->input('email');
    $compte->passe = $request->input('password');
    $compte->phone = $request->input('phone');
    $compte->login = $request->input('logine');
    
    $compte->save();
     return redirect()->route(('loginForm'));






  }
}
