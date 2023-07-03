<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use App\Models\Administrateur;
use App\Models\Citoyene;
use App\Models\Intervenant;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginBasic extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-login-basic');
  }

  function login(Request $request)  {
    $citoyens = Citoyene::all();
    $intervenants = Intervenant::all();
    $admins = Administrateur::all();

    $email = $request->email;
    $password = $request->password;

    // dd($email,$password);
    foreach ($citoyens as $citoyen) {
        if ($citoyen->login == $email && $citoyen->passe == $password) {
           session()->put('citoyen',$citoyen);

          session()->put('user',$citoyen);
          return redirect()->route('index');

          // return dd(session()->get('citoyen'));
        }
    }

    foreach ($admins as $admin) {
      if ($admin->email == $email && $admin->passe == $password) {
        // session()->put('admin',$admin);


        session()->put('user',$admin);
        return redirect()->route('index');
        

        // return dd(session()->get('admin'));
           
      }
    }
    
    foreach ($intervenants as $intervenant) {
      if ($intervenant->email == $email && $intervenant->passe == $password) {
        session()->put('intervenant',$intervenant);
        return dd(session()->get('intervenant'));
      }
    } 
  }

  function loginForm(){
    return view('site.User.loginForm');
  }

  public function logout()
{
    

     Session::flush();
     return redirect()->route('index');
     
    //  Auth::logout();
 
    // dd(session()->put('citoyen'));
  
   
    // Redirigez l'utilisateur vers la page appropriée après la déconnexion
    // return redirect()->route('index'); 
    // Par exemple, redirigez vers la page d'accueil

  

}


}
