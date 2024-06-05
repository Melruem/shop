<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Produit;
use App\Models\Panier;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;



class PanierController extends Controller
{
    public function show(int $id, int $unique, int $nul): View
    {
        $d = 0;
        $produit = Produit::find($id);
        $panier = Panier::create([
            'nom' => $produit->nom,
            'image' => $produit->image,
            'qtite' => '1',
            'prix' => $produit->prix,
            'compteur' => $nul + 1,
            'unique' => $unique,
            'produit_id'=> $id,
            'condition' => '0',
        ]);
        if(Auth::user()){
            if(!(Auth::user()->email_verified_at)){
                return view('verification', ['unique' => $unique, 'test' => $nul]);
            }
            else{
                return view('welcome', ['produit' => Produit::find($id), 'unique' => $unique, 'test' => $nul + 1]);
            }
        }

        return view('welcome', ['produit' => Produit::find($id), 'unique' => $unique, 'test' => $nul + 1]);
    }

    public function showw(int $unique, int $test): View
    {
        if(Auth::user()){
            if(!(Auth::user()->email_verified_at)){
                return view('verification', ['unique' => $unique, 'test' => $nul]);
            }
            else{
                return view('cart', ['unique' => $unique, 'test' => $test]);
            }
        }
        return view('cart', ['unique' => $unique, 'test' => $test]);
    }

    public function destroy(int $id, int $unique, int $test)
    {

        $panier = Panier::find($id);
        $panier->delete();


        return view('cart', ['unique' => $unique, 'test' => $test-1])->with('success', 'élément supprimé avec succès!');
    }

    public function sure(int $unique, int $test): View
    {
        return view('confirmation', ['unique' => $unique, 'test' => $test]);
    }

    
}