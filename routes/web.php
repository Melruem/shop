<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SommaireController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\ProblemeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ProduitController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('home');
})->name('dashboard');

Route::get('/Details/{id}/{unique}/{nul}', [SommaireController::class, 'show'])->name('summary');

Route::get('/Resume/{id}/{unique}/{nul}', [SommaireController::class, 'showw'])->name('summaryy');

Route::get('/Produits/{unique}/{nul}', [SommaireController::class, 'produit'])->name('stock');

Route::get('/Formations/{unique}/{nul}', [SommaireController::class, 'formation'])->name('session');

Route::get('/A propos/{unique}/{nul}', [ProduitController::class, 'showw'])->name('about');

Route::get('/Contact/{unique}/{nul}', [ProduitController::class, 'showww'])->name('contact');

Route::get('/Home/{unique}/{nul}', [SommaireController::class, 'home'])->name('homee');

Route::get('/Home/{id}/{unique}/{nul}', [PanierController::class, 'show'])->name('increment');

Route::get('/Panier/{unique}/{nul}', [PanierController::class, 'showw'])->name('panel');

Route::get('/Panier/{unique}/{nul}', [PanierController::class, 'showw'])->name('panel');

Route::get('/supprimer/{id}/{unique}/{nul}', [PanierController::class, 'destroy'])->name('delete');

Route::get('/fiche/{id}/{unique}/{nul}', [FormationController::class, 'show'])->name('file');

Route::post('/save/{id}/{unique}/{nul}', [FormationController::class, 'store'])->name('savee');



Route::get('/augmenter', [OperationController::class, 'chier'])->name('chier');

Route::get('/adddad', [ProblemeController::class, 'ajoutttt'])->name('adddd');

Route::get('/consullltt', [OperationController::class, 'consulter'])->name('consulttt');

Route::get('/shoooow', [ProblemeController::class, 'showwww'])->name('displayyy');

Route::post('/stooore', [OperationController::class, 'storeee'])->name('saveee');

Route::post('/bilaaann', [OperationController::class, 'showww'])->name('displayy');

Route::get('/updattteee/{id}/{date}', [OperationController::class, 'summaryyy'])->name('summaryyy');

Route::post('/storrreeee', [ProblemeController::class, 'storeeee'])->name('saveeee');

Route::get('/updaaaattte/{id}', [ProblemeController::class, 'summaryyyy'])->name('summaryyyy');



Route::post('/save', [ProduitController::class, 'store'])->name('save');

Route::post('/valider/{unique}', [ReservationController::class, 'store'])->name('valide');

Route::get('/confirmation/{unique}/{nul}', [PanierController::class, 'sure'])->name('confirm');

Route::get('/achat/{id}/{unique}/{nul}', [ReservationController::class, 'buy'])->name('acheter');

Route::post('/valider/{unique}', [ReservationController::class, 'store2'])->name('valide2');

Route::get('/commande/{unique}', [ReservationController::class, 'commande'])->name('commande');

Route::get('/connecter/{unique}/{nul}', [LoginController::class, 'show'])->name('log');

Route::get('/signup/{unique}/{nul}', [RegisterController::class, 'show'])->name('sign');

Route::post('/enregistrement/{unique}/{nul}', [RegisterController::class, 'store'])->name('storee');

Route::post('/login/{unique}/{nul}', [LoginController::class, 'login'])->name('loginn');

Route::get('/finish/{id}', [CommandeController::class, 'confirm'])->name('fin');

Route::get('/end/{id}', [FormationController::class, 'confirm'])->name('finn');

Route::get('/delete/{id}', [CommandeController::class, 'delete'])->name('supprimer');

Route::get('/end/{id}', [FormationController::class, 'confirm'])->name('finn');

Route::get('/lus/{id}', [ProduitController::class, 'lire'])->name('read');

Route::get('/liste_message', [ProduitController::class, 'liste'])->name('list');

Route::get('/suppression/{id}', [ProduitController::class, 'ddelete'])->name('suppression');

Route::post('/enregistrement/{unique}/{nul}', [ProduitController::class, 'storee'])->name('storage');

Route::get('/attente', [CommandeController::class, 'wait'])->name('waiting');

Route::get('/terminée', [CommandeController::class, 'finish'])->name('complet');

Route::get('/stay', [FormationController::class, 'wait'])->name('stay');

Route::get('/zubete', [FormationController::class, 'finish'])->name('zubete');


Route::get('/ajouter', [ProduitController::class, 'ajout'])->name('add');

Route::get('/erase', [ProduitController::class, 'delete'])->name('erase');

Route::get('/erase/{id}', [FormationController::class, 'destroy'])->name('erasee');

Route::get('/produits', [ProduitController::class, 'show'])->name('produit');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/email/verify', function () {
    return view('verification');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::get('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return redirect()->route('home');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');



