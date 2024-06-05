<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Produit;
use App\Models\Confirmer;
use App\Models\Panier;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;



class CommandeController extends Controller
{
    public function confirm(int $id): View
    {
        $d = 0;
        $confirmation = Confirmer::find($id);
        $confirmation->condition = 1;
        $confirmation->save();
        

        return view('commande_attente')->with('success', 'Commande confirmée avec succès');
    }

    

    public function delete(int $id): View
    {

        $panier = Confirmer::find($id);
        $panier->delete();


        return view('commande_attente')->with('success', 'Commande supprimée avec succès');
    }

    public function wait(): View
    {
        return view('commande_attente');
    }

    public function finish(): View
    {
        return view('commande_finie');
    }

    
}