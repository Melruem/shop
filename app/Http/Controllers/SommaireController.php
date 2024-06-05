<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;


class SommaireController extends Controller
{
    public function show(int $id, int $unique, int $test): View
    {
        if(Auth::user()){
            if(!(Auth::user()->email_verified_at)){
                return view('verification', ['unique' => $unique, 'test' => $nul]);
            }
            else{
                return view('detail', ['produit' => Produit::find($id), 'unique' => $unique, 'test' => $test]);
            }
        }
        return view('detail', ['produit' => Produit::find($id), 'unique' => $unique, 'test' => $test]);
    }

    public function showw(int $id, int $unique, int $test): View
    {
        if(Auth::user()){
            if(!(Auth::user()->email_verified_at)){
                return view('verification', ['unique' => $unique, 'test' => $nul]);
            }
            else{
                return view('detail', ['formation' => Formation::find($id), 'unique' => $unique, 'test' => $test]);
            }
        }
        return view('detail', ['formation' => Formation::find($id), 'unique' => $unique, 'test' => $test]);
    }

    public function produit(int $unique, int $test): View
    {
        if(Auth::user()){
            if(!(Auth::user()->email_verified_at)){
                return view('verification', ['unique' => $unique, 'test' => $nul]);
            }
            else{
                return view('produit', ['unique' => $unique, 'test' => $test]);
            }
        }
        return view('produit', ['unique' => $unique, 'test' => $test]);
    }

    public function formation(int $unique, int $test): View
    {
        if(Auth::user()){
            if(!(Auth::user()->email_verified_at)){
                return view('verification', ['unique' => $unique, 'test' => $nul]);
            }
            else{
                return view('formation', ['unique' => $unique, 'test' => $test]);
            }
        }
        return view('formation', ['unique' => $unique, 'test' => $test]);
    }

    public function home(int $unique, $test): View
    {
        return view('welcome', ['unique' => $unique, 'test' => $test]);
    }
}