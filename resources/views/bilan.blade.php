@extends('master')
@inject('confirmers', 'App\Models\Confirmer')
@inject('operations', 'App\Models\Operation')
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Lin_Beauty</title>
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

    @php
        $compteur = 0;
        $journalier = 0;
    @endphp
     <div class="container-fluid big-padding about-cover"style="background-color: white; color: white;">
     
        <div class="container"style="background-color: white; color: white;">
            <div class="row"style="background-color: white; color: white;">
                <div class="col-md-10 mx-auto"style="background-color: white; color: white;">
                @include('success-message')
                    <table class="table bg-white shadow-md">
                        <tr>
                            <th>#</th>
                            <th>Nom_Agent</th>
                            <th>Date</th>
                            <th>Intitulé</th>
                            <th>Détail</th>
                            <th>Paiement</th>
                            <th>Montant_Verser</th>
                            <th>Reste</th>
                            <th>Nom_Client</th>
                            <th>Num_Client</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($operations::all() as $c)
                        @if($c->date == $date)
                        <tr class="align-middle">
                            <td>{{$c->id}}</td>
                            <td>
                                {{$c->nom_agent}}
                            </td>
                            <td>{{$c->date}}</td>
                            <td>{{$c->intitule}}</td>
                            <td>{{$c->detail}}</td>
                            <td>{{$c->paiement}}</td>
                            <td>{{$c->montant_verser}}</td>
                            <td>{{$c->reste}}</td>
                            <td>{{$c->nom_client}}</td>
                            <td>{{$c->numero_client}}</td>
                            <td>{{$c->statut}}</td>
                            <td>
                                @if($c->statut == "Terminer")
                                    <label for="statut"
                                    class="control-label mb-1">@lang('Aucune_Action')</label>
                                @else
                                    <a href="{{ route('summaryyy', [$c->id, $date]) }}">
                                <button class="btn btn-xs pt-2 btn-danger" style="background-color: white; color: white;">Validez_operation</button>
                                </a>
                                @endif

                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                    <div class="section-tile row">
                        <div class="col-md-10 text-center mx-auto" >
                            <h2>Montant initial en caisse : 0fcfa</h2>
                                            
                        </div>
                   </div>
                   @foreach ($operations::all() as $c)
                    @if($c->date == $date)
                       @php
                            $journalier = $journalier + $c->montant_verser;
                       @endphp 
                    @endif
                   @endforeach
                    @foreach ($operations::all() as $c)
                       @php
                             if($c->statut == "En_cours"){
                                $compteur = $compteur + $c->montant_verser;
                            }
                            else{
                                $compteur = $compteur + $c->montant_verser + $c->reste ;
                            } 
                       @endphp 
                   @endforeach

                   <div class="section-tile row">
                        <div class="col-md-10 text-center mx-auto" >
                            <h2 style="background-color: white; color: white;">Montant total versé le {{$date}} : {{$journalier}} FCFA</h2>               
                        </div>
                   </div>
                    
                    @php
                            $compteur = $compteur + 0;
                    @endphp
                    

                   <div class="section-tile row">
                        <div class="col-md-10 text-center mx-auto" >
                            <h2 style="background-color: white; color: white;">Montant total en Caisee : {{$compteur}} FCFA</h2>
                                            
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

                        <p>Lin_Beauty Enterprise est une boutique de vente des produits esthétiques en gros et détail qui importe les marques cosmétiques  de qualité Allemande. Elle est opère dans nombreux domaine à l'exemple du domaine cosmétique et des soins corporels. Nos produits sont adaptés à tout type de peau.</p>

                        <ul>
                            <li>Montée Jouvence</li>
                            <li>lindsaytiomo@gmail.com</li>
                            <li>674-83-53-76</li>
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
                                <p>Adapté à tout type de peau !! </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 foot-services">
                        <h4>Top Categorie</h4>

                        <ul>
                            <li><a href="">Nos Produits</a></li>
                            <li><a href="">Produit Cosmétiques</a></li>
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
            <a href="https://www.smarteyeapps.com/">2024 &copy; All Rights Reserved | Designed and Developed by Lin_Beauty.com</a>

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
