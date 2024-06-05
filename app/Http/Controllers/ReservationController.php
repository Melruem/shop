<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Produit;
use App\Models\Panier;
use App\Models\User;
use App\Models\Confirmer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;



class ReservationController extends Controller
{
    public function store( Request $request, int $unique): View
    {
        $confirmer = Confirmer::create([
            'nom' => $request->name,
            'numero' => $request->numero,
            'lieu' => $request->lieu,
            'jour' => $request->jour,
            'heure' => $request->heure,
            'unique' => $unique,
        ]);
        $paniers = Panier::all()->where('unique', $unique);
        foreach ($paniers as $panier) {                             
            $panier->condition = 1;
            $panier->save();
        }
        return redirect()->route('home')->with('success', 'Merci on vous contactera bientot!!');
    }

    public function buy(int $id, int $unique, int $nul): View
    {
        if(Auth::user()){
            if(!(Auth::user()->email_verified_at)){
                return view('verification', ['unique' => $unique, 'test' => $nul]);
            }
            else{
                return view('confirmation2', ['produit' => Produit::find($id), 'unique' => $unique, 'test' => $nul ]);
            }
        }
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
            'condition' => '1',
        ]);
        return view('confirmation2', ['produit' => Produit::find($id), 'unique' => $unique, 'test' => $nul ]);
    }

    public function store2( Request $request, int $unique)
    {
        $confirmer = Confirmer::create([
            'nom' => $request->name,
            'numero' => $request->numero,
            'lieu' => $request->lieu,
            'jour' => $request->jour,
            'heure' => $request->heure,
            'unique' => $unique,
        ]);
        $paniers = Panier::all()->where('unique', $unique);
        foreach ($paniers as $panier) {                             
            $panier->condition = 1;
            $panier->save();
        }
        return redirect()->route('home')->with('success', 'Merci on vous contactera bientot!!');
    }

    public function commande(int $unique): View
    {
        
        return view('cart2', ['unique' => $unique]);
    }


    
}