<?php

namespace App\Http\Controllers;

use App\Models\Formation;
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



class OperationController extends Controller
{

    public function storeee( Request $request): View
    {
        $transaction = Operation::create([
            'nom_agent' => $request->name,
            'date' => $request->date,
            'intitule' => $request->intitule,
            'detail' => $request->detail,
            'paiement' => $request->paiement,
            'montant_verser' => $request->montant,
            'reste' => $request->reste,
            'nom_client' => $request->nom,
            'numero_client' => $request->numero,
            'statut' => $request->statut,
        ]);
        return view('home');
    }

    public function chier(): View
    {
        return view('ajout_operation');
    }

    public function consulter(): View
    {
        return view('date_recap');
    }

    public function summaryyy(int $id, string $date): View
    {
        
        $operation = Operation::find($id);
        $operation->statut = "Terminer";
        $operation->save();
        
        return view('bilan', ['date' => $date]);
    }

    public function showww( Request $request): View
    {
        return view('bilan', ['date' => $request->date]);
    }

    
    public function destroy(int $id): View
    {

        $reservation = Conf_formation::find($id);
        $reservation->delete();


        return view('souscription_attente')->with('success', 'Souscription supprimée avec succès');
    }



    
}