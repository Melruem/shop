<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Produit;
use App\Models\Panier;
use App\Models\Confirmer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Traits\GetIpAddress;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Validation\Rules;
use Spatie\Activitylog\Models\Activity;
use Spatie\Permission\Models\Role;



class RegisterController extends Controller
{

    public function show(int $unique, int $test): View
    {
        
        return view('signup', ['unique' => $unique, 'test' => $test]);
        
        
    }

    public function show2(int $unique, int $test): View
    {
        return view('login', ['unique' => $unique, 'test' => $test]);
    }

    public function store(Request $request, int $unique, int $test)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        $user->sendEmailVerificationNotification();
        return view('verification', ['unique' => $unique, 'test' => $test])->with('success', 'Enregistré avec succès!');

    }

    



    
}