@extends('master')
@inject('confirmers', 'App\Models\Confirmer')
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Brocante Dongmo</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </head>
@section('breadcrumbs')
    <div class="breadcrumbs">
        
        
    </div>
@endsection
@section('content')
                <div class="card-body">
                                <form
                                    action="{{ route('saveee') }}"
                                    method="post" enctype="multipart/form-data">

                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for="name"
                                                    class="control-label mb-1">@lang('Noms_agent')</label>
                                                <input id="name" name="name" type="text"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for="name"
                                                    class="control-label mb-1">@lang('Date_opération')</label>
                                                <input id="date" name="date" type="date"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="">
                                            </div>
                                        </div>

                                        <label for="x_card_code"
                                                class="control-label mb-1">@lang('Intitulé')</label>
                                            <div class="input-group">
                                                <select name="intitule" id="intitule" class="form-control">
                                                    <option value="">@lang('Selectionner un type')</option>
                                                    <option value="Impression">@lang('Impression')</option>
                                                    <option value="Photocopie">@lang('Photocopie')</option>
                                                    <option value="Photocopie_et_scan">@lang('Photocopie et Scan')</option>
                                                    <option value="Vente_materiel">@lang('Vente du matériel')</option>
                                                    <option value="Scan">@lang('Scan')</option>
                                                    <option value="Impression_et_Scan">@lang('Impression et Scan')</option>
                                                    <option value="Souscription_Formation">@lang('Souscription Formation')</option>
                                                </select>
                                            </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for="name"
                                                    class="control-label mb-1">@lang('Détail Opération')</label>
                                                <input id="detail" name="detail" type="text"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="name">
                                            </div>
                                        </div>

                                            <label for="x_card_code"
                                                class="control-label mb-1">@lang('Paiement')</label>
                                            <div class="input-group">
                                                <select name="paiement" id="paiement" class="form-control">
                                                    <option value="">@lang('Selectionner un mode de paiement')</option>
                                                    <option value="Totalité">@lang('Totalité')</option>
                                                    <option value="Avance">@lang('Avance')</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for="name"
                                                    class="control-label mb-1">@lang('Montant versé')</label>
                                                <input id="montant" name="montant" type="text"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="name">
                                            </div>
                                            </div>

                                            <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for="name"
                                                    class="control-label mb-1">@lang('Reste à Payer')</label>
                                                <input id="reste" name="reste" type="text"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="name">
                                            </div>
                                            </div>

                                            <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for="name"
                                                    class="control-label mb-1">@lang('Nom du Client')</label>
                                                <input id="nom" name="nom" type="text"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="name">
                                            </div>
                                            </div>

                                            <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for="name"
                                                    class="control-label mb-1">@lang('Numéro du Client')</label>
                                                <input id="numero" name="numero" type="text"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="name">
                                            </div>
                                           </div>

                                            <label for="x_card_code"
                                                class="control-label mb-1">@lang('Statut_opération')</label>
                                            <div class="input-group">
                                                <select name="statut" id="statut" class="form-control">
                                                    <option value="">@lang('Selectionner le statut')</option>
                                                    <option value="En_cours">@lang('En cours')</option>
                                                    <option value="Terminer">@lang('Terminée')</option>
                                                </select>
                                            </div>
                                        
                                        <button id="payment-button" type="submit"
                                            class="btn btn-lg btn-info btn-student btn-block mt-3" style="background-color: purple; color: white;">
                                            <span id="payment-button-amount">@lang('Enregistrer')</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
 <footer>
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 foot-about">
                        <h4>A Propos de Nous</h4>

                        <p>La Brocante Dongmo est une brocante qui importe les marques de qualité Allemande. Elle est opère dans nombreux domaine à l'exemple du domaine électroménager et la vente du matériel informatique. Nos produits sont de qualités supérieures et avec une garantie de un mois.</p>

                        <ul>
                            <li>Montée Jouvence, descente Mario en face de Méa Bois</li>
                            <li>faniedonfack@yahoo.fr</li>
                            <li>652-61-31-09</li>
                        </ul>
                    </div>

                    <div class="col-md-3 foot-post">
                        <h4>Dernières Publications</h4>

                        <div class="post-row">
                            <div class="image">
                                <img src="assets/images/blog/1.jpg" alt="">
                            </div>
                            <div class="detail ps-2">
                                <p>Retrouvez nos derniers produits dans la catégorie produit !!! </p>
                            </div>
                        </div>

                        <div class="post-row">
                            <div class="image">
                                <img src="assets/images/blog/7.jpg" alt="">
                            </div>
                            <div class="detail p-2">
                                <p>Chaque produit est d'origine Allemande!! </p>
                            </div>
                        </div>

                        <div class="post-row">
                            <div class="image">
                                <img src="assets/images/blog/6.jpg" alt="">
                            </div>
                            <div class="detail ps-2">
                                <p>Garantie de un (01) mois !! </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 foot-services">
                        <h4>Top Categorie</h4>

                        <ul>
                            <li><a href="">Nos Produits</a></li>
                            <li><a href="">Matériel Informatique</a></li>
                            <li><a href="">Nos services</a></li>
                            <li><a href="">Nous contactez</a></li>
                            <li><a href="">A propos de nous</a></li>
                            
                        </ul>
                    </div>

                    <div class="col-md-3 foot-news">
                        <h4>News Letter</h4>
                        <p>Soyez informé de nos dernières publication, en communicant votre adresse Email </p>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control mb-0" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text bg-danger" id="basic-addon2"><i class="bi text-white bi-send"></i></span>
                            </div>
                        </div>

                        <ul>
                            <li><i class="bi bi-facebook"></i></li>
                            <li><i class="bi bi-twitter"></i></li>
                            <li><i class="bi bi-instagram"></i></li>
                            <li><i class="bi bi-linkedin"></i></li>
                            <li><i class="bi bi-pinterest"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy">
        <div class="container">
            <a href="https://www.smarteyeapps.com/">2024 &copy; All Rights Reserved | Designed and Developed by Brocante_Dongmo.com</a>

            <span>
                <a href=""><i class="fab fa-github"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href="https://in.pinterest.com/prabnr/pins/"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://twitter.com/prabinraja89"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/freewebtemplatesbysmarteye"><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>
    </div>
        
    </bod>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>

</html>
@section('script')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection