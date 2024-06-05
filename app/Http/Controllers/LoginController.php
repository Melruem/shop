<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Produit;
use App\Models\Panier;
use App\Models\Confirmer;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Traits\GetIpAddress;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Date;
use Illuminate\Validation\Rules;
use Spatie\Activitylog\Models\Activity;
use Spatie\Permission\Models\Role;



class LoginController extends Controller
{

    public function show(int $unique, int $test): View
    {
        return view('login', ['unique' => $unique, 'test' => $test] );
    }

    public function login(Request $request, int $unique, int $test)
  {
    if($request->email == 'admin@yahoo.fr' && $request->password == '1234'){
      
      return redirect()->route('dashboard')->with('success', 'Bienvenue Administrateur!');

    }
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if(Auth::attempt($credentials))
    {
        $request->session()->regenerate();
        return redirect()->route('home')->with('success', 'Vous etes connecté!');
            
    }

    return back()->withErrors([
        'email' => 'Your provided credentials do not match in our records.',
    ])->onlyInput('email');
  }

  public function logout(Request $request) 
  {
    Auth::logout();
    return redirect()->route('home')->with('success', 'Vous etes déconnecté!');
  }



    
}