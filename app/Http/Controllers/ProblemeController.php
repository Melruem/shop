<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Probleme;
use App\Models\Operation;
use App\Models\Produit;
use App\Models\Panier;
use App\Models\Conf_formation;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;



class ProblemeController extends Controller
{

    public function storeeee( Request $request): View
    {
        $matter = Probleme::create([
            'nom_agent' => $request->name,
            'date' => $request->date,
            'detail' => $request->detail,
            'indicateur' => '0',
        ]);
        return view('home');
    }

    public function ajoutttt(): View
    {
        return view('ajout_probleme');
    }

    public function summaryyyy(int $id): View
    {
        
        $probleme = Probleme::find($id);
        $probleme->indicateur = '1';
        $probleme->save();
        
        return view('bilan_probleme');
    }

    public function showwww(): View
    {
        return view('bilan_probleme');
    }

    
    public function destroy(int $id): View
    {

        $reservation = Conf_formation::find($id);
        $reservation->delete();


        return view('souscription_attente')->with('success', 'Souscription supprimée avec succès');
    }



    
}