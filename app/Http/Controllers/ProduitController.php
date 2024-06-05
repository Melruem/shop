<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Produit;
use App\Models\Panier;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;



class ProduitController extends Controller
{
    public function store(Request $request): View
    {
        $d = 0;
        $produit = Produit::create([
            'nom' => $request->name,
            'qty' => $request->quantite,
            'image' => $request->image,
            'prix' => $request->prix,
            'description' => $request->description,
        ]);

        return view('home')->with('success', 'Produit ajouté avec succès!');
    }

    public function ajout(): View
    {
        return view('ajout_produit');
    }

    public function delete(int $id)
    {

        $produit = Produit::find($id);
        $produit->delete();


        return view('liste_produit')->with('success', 'Produit supprimé avec succès!');
    }

    public function show(): View
    {
        return view('liste_produit');
    }

    public function showw(int $unique, int $test): View
    {
        return view('apropos', ['unique' => $unique, 'test' => $test]);
    }

    public function showww(int $unique, int $test): View
    {
        return view('contact', ['unique' => $unique, 'test' => $test]);
    }

    public function storee(Request $request, int $unique, int $nul)
    {
        $message = Message::create([
            'nom' => $request->name,
            'email' => $request->email,
            'numero' => $request->numero,
            'message' => $request->message,
            'description' => $request->description,
            'condition' => '0',
        ]);
        
        return redirect()->route('home')->with('success', 'Votre Message a été bien envoyé!');
    }

    public function lire(int $id): View
    {
        $d = 0;
        $message = Message::find($id);
        $message->condition = 1;
        $message->save();
        

        return view('message')->with('success', 'Souscription confirmée avec succès');
    }

    public function ddelete(int $id)
    {

        $message = Message::find($id);
        $message->delete();


        return view('message')->with('success', 'Produit supprimé avec succès!');
    }

    public function liste(): View
    {
        return view('message');
    }

    
}