<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Produit;
use App\Models\Panier;
use App\Models\Conf_formation;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;



class FormationController extends Controller
{
    public function show(int $id, int $unique, int $nul): View
    {
        
        return view('info_formation', ['id' => $id, 'unique' => $unique, 'test' => $nul]);
    }

    public function store( Request $request, int $id, int $unique, int $nul): View
    {
        $reserver = Conf_formation::create([
            'nom_complet' => $request->name,
            'numero' => $request->numero,
            'date_naiss' => $request->naiss,
            'sexe' => $request->sexe,
            'langue' => $request->langue,
            'situation' => $request->situation,
            'diplome' => $request->diplome,
            'fichier' => $request->fichier,
            'ville' => $request->ville,
            'formation_id' => $id,
            'unique' => $unique,
            'condition' => '0',
        ]);
        return view('welcome')->with('success', 'Merci, on vous fera signe pour la suite procédure');
    }

    public function confirm(int $id): View
    {
        $d = 0;
        $reservation = Conf_formation::find($id);
        $reservation->condition = 1;
        $reservation->save();
        

        return view('souscription_attente')->with('success', 'Souscription confirmée avec succès');
    }

    public function destroy(int $id): View
    {

        $reservation = Conf_formation::find($id);
        $reservation->delete();


        return view('souscription_attente')->with('success', 'Souscription supprimée avec succès');
    }

    


    public function wait(): View
    {
        return view('souscription_attente');
    }

    public function finish(): View
    {
        return view('souscription_terminee');
    }

    
}