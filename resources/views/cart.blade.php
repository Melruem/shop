@inject('produits', 'App\Models\Produit')
@inject('formations', 'App\Models\Formation')
@inject('paniers', 'App\Models\Panier')
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
    <bod>
        <header class="container-fluid bg-white">
            <div class="header-top bg-gray  border-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="d-inline-flex pt-0 pt-md-2 fs-6">
                                <li class="p-2 "><i class="bi bi-envelope"></i> Email: faniedonfack@yahoo.fr</li>
                                <li class="p-2 d-none d-md-block"><i class="bi bi-headphones"></i> 652 61 31 09</li>
                            </ul>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <ul class="ms-auto d-inline-flex">
                                <li class="p-2"><a target="_blank" href=""><button class="btn px-4 btn-danger" style="background-color: purple; color: white;">Login</button></a></li>
                                <li class="p-2"><a target="_blank" href=""><button class="btn px-4 btn-outline-danger" style="background-color: purple; color: white;">Sign Up</button></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-contaienr p-2">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-3 col-9 pt-1 pb-2">
                            <a href="index.html">
                                <img src="{{asset('css/logoo.JPG')}}" />
                            </a> 
                         </div>
                         <div class="col-md-6 d-none d-md-block pt-2">
                              <div class="input-group pt-1 mb-0">
                                  <input type="text" class="form-control border-end-0 mb-0" placeholder="Search Apps" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                  <span class="input-group-text sit border-start-0" id="basic-addon2"><i class="bi bi-search"></i></span>
                            </div>
                         </div>
                         <div class="col-md-3 col-3 pt-1 text-end">
                            @if(isset($test))
                             <a href="{{ route('panel', [$unique, $test] ) }}">
                            
                            @endif
                                 <button type="button" class="btn btn-light shadow-md border position-relative">
                                  <i class="bi fs-4 bi-basket"></i>
                                  <span class="position-absolute fs-6 top-0 start-100 translate-middle badge rounded-pill bg-danger"style="background-color: purple; color: white;">
                                    @if(isset($test))
                                        {{$test}}
                                    @else
                                        0
                                    @endif
                                  </span>
                                  <img src="{{asset('css/cart.jpg')}}" width=100px" />
                                </button>
                             </a>
                            
                            
                            
                         </div>
                     </div>
                 </div>   
            </div>
            

            <div class="menu-bar bg-danger container-fluid border-top" style="background-color: purple; color: white;">
                <div class="container" style="background-color: purple; color: white;">
                   <h6 class="d-md-none text-white p-3 mb-0 fw-bold">Menu 
                  <a class="text-white" data-bs-target="#menu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="menu"><i class="bi cp bi-list float-end fs-1 dmji"></i></a> 
                   </h6>
                    <ul id="menu" class=" navcol fw-bold d-none d-md-inline-flex">
                        <li class="p-21 px-4"><a class="text-white" href="{{ route('homee', [$unique, $test]) }}">Home<i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                        <li class="p-21 px-4"><a class="text-white" href="{{ route('stock', [$unique, $test]) }}">Nos Produits <i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                          <li class="p-21 px-4"><a class="text-white" href="{{ route('session', [$unique, $test]) }}">Nos Formations <i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                        <li class="p-21 px-4"><a class="text-white" href="{{ route('about', [$unique, $test]) }}">A Propos de Nous <i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                        <li class="p-21 px-4"><a class="text-white" href="{{ route('contact', [$unique, $test]) }}">Nous Contactez <i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        @php
            $d = 0;
            $correspondant = array();
            $l = 0;
            $m = 0;
        @endphp
        <div class="container-fluid big-padding about-cover" style="background-color: purple; color: white;">
        @include('success-message')
        <div class="container" style="background-color: purple; color: white;">
            <div class="row" style="background-color: purple; color: white;">
                <div class="col-md-10 mx-auto" style="background-color: purple; color: white;">
                    <table class="table bg-white shadow-md">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Nom du Produit</th>
                            <th>Qtite</th>
                            <th>Prix</th>
                            <th>Total</th>
                            <th>Supprimer</th>
                        </tr>
                        @foreach ($paniers::all() as $panier)
                        @if($panier->unique == $unique && $l == 0)
                        @php
                            $d = $panier->prix + $d;
                        @endphp
                        <tr class="align-middle">
                            <td>{{$panier->id}}</td>
                            <td>
                                <img src="{{asset($panier->image)}}" width="200px" />
                            </td>
                            <td>{{$panier->nom}}</td>
                            <td>1</td>
                            <td>{{$panier->prix}}</td>
                            <td>{{$panier->prix}}</td>
                            <td>
                                <a href="{{ route('delete', [$panier->id, $unique, $test ]) }}">
                                <button class="btn btn-xs pt-2 btn-danger" style="background-color: purple; color: white;"><i class="bi bi-trash"></i></button>
                                </a>
                            </td>
                        </tr>
                        @php
                            $correspondant[] = $panier->produit_id;
                            $l = $l + 1;
                        @endphp
                        @elseif($panier->unique == $unique && $l != 0)
                        @php
                            foreach($correspondant as $c) 
                                {  
                                    if ($c == $panier->produit_id ) 
                                    {
                                        $m = $m + 1;
                                    }
                                }
                        @endphp
                        @if($m == 0)
                        @php
                            $d = $panier->prix + $d;
                        @endphp
                        <tr class="align-middle">
                            <td>{{$panier->id}}</td>
                            <td>
                                <img src="{{asset($panier->image)}}" width="200px" />
                            </td>
                            <td>{{$panier->nom}}</td>
                            <td>1</td>
                            <td>{{$panier->prix}}</td>
                            <td>{{$panier->prix}}</td>
                            <td>
                                <a href="{{ route('delete', [$panier->id, $unique, $test ]) }}">
                                <button class="btn btn-xs pt-2 btn-danger" style="background-color: purple; color: white;"><i class="bi bi-trash"></i></button>
                                </a>
                            </td>
                        </tr>
                        @php
                            $m = 0;
                            $correspondant[] = $panier->produit_id;
                        @endphp
                        @endif
                        @php
                            $m = 0;
                        @endphp
                        @endif
                        @endforeach
                    </table>
                    
                    <a href="{{ route('confirm', [$unique, $test ]) }}">
                    <button class="btn btn-danger float-end fw-bolder px-4" style="background-color: purple; color: white;">Confirmer le Paiement</button>
                    </a>
                    
                    <button class="btn btn-danger float-end fw-bolder px-4" style="background-color: purple; color: white;">TOTAL A PAYER: {{$d}}FCFA</button>
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
