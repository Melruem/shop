@inject('produits', 'App\Models\Produit')
@inject('formations', 'App\Models\Formation')
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
        
        
         @php
            $p = rand(1,1000);
            $nul = 0;
            $e = 0;
            $f = 1;
        @endphp
        @if(isset($unique))
        @php
          if($p != $unique) {
                $p=$unique;
            }
        @endphp
        @endif
        <header class="container-fluid bg-white">
        
            <div class="header-top bg-gray  border-bottom">
                <div class="container">
                
                @include('success-message')
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="d-inline-flex pt-0 pt-md-2 fs-6">
                                <li class="p-2 " ><i class="bi bi-envelope"></i> Email: faniedonfack@yahoo.fr</li>
                                <li class="p-2 d-none d-md-block" style="background-color: purple; color: white;"><i class="bi bi-headphones"></i> 652 61 31 09</li>
                            </ul>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <ul class="ms-auto d-inline-flex">
                                @if(isset($test))
                                <li class="p-2"><a  href="{{ route('log', [$unique, $test] ) }}"><button class="btn px-4 btn-danger" style="background-color: purple; color: white;">Login</button></a></li>
                                @else
                                <li class="p-2"><a  href="{{ route('log', [$p, $nul] ) }}"><button class="btn px-4 btn-danger" style="background-color: purple; color: white;">Login</button></a></li>
                                @endif
                                @if(isset($test))
                                <li class="p-2"><a  href="{{ route('sign', [$unique, $test] ) }}"><button class="btn px-4 btn-outline-danger" style="background-color: purple; color: white;">Sign Up</button></a></li>
                                @else
                                <li class="p-2"><a  href="{{ route('sign', [$p, $nul] ) }}"><button class="btn px-4 btn-outline-danger" style="background-color: purple; color: white;">Sign Up</button></a></li>
                                @endif
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
                             @else
                            <a href="{{ route('panel', [$p, $nul] ) }}">
                            @endif
                                 <button type="button" class="btn btn-light shadow-md border position-relative" style="background-color: purple; color: white;">
                                  <i class="bi fs-4 bi-basket"></i>
                                  <span class="position-absolute fs-6 top-0 start-100 translate-middle badge rounded-pill bg-danger" style="background-color: purple; color: white;">
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
            @if(Auth::user())
                <div class="col-md-4 d-flex align-items-end">
                            <ul class="ms-auto d-inline-flex">
                                
                                <li class="p-2"><button class="btn px-4 btn-danger" style="background-color: purple; color: white;">Bienvenue {{ Auth::user()->name}} !!</button></li>
                                
                                <li class="p-2"><a  href="{{ route('logout') }}" style="background-color: purple; color: white;"><button class="btn px-4 btn-danger">Deconnexion</button></a></li>
                                
                            </ul>
                </div>
             @endif
            

            <div class="menu-bar bg-danger container-fluid border-top" style="background-color: purple; color: white;">
                <div class="container" style="background-color: purple; color: white;">
                   <h6 class="d-md-none text-white p-3 mb-0 fw-bold">Menu 
                  <a class="text-white" data-bs-target="#menu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="menu"><i class="bi cp bi-list float-end fs-1 dmji"></i></a> 
                   </h6>
                    <ul id="menu" class=" navcol fw-bold d-none d-md-inline-flex">
                        @if(isset($test))
                        <li class="p-21 px-4"><a class="text-white" href="{{ route('homee', [$p, $test]) }}">Home<i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                        @else
                        <li class="p-21 px-4"><a class="text-white" href="{{ route('homee', [$p, $nul]) }}">Home<i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                        @endif
                        @if(isset($test))
                        <li class="p-21 px-4"><a class="text-white" href="{{ route('stock', [$p, $test]) }}">Nos Produits <i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                        @else
                        <li class="p-21 px-4"><a class="text-white" href="{{ route('stock', [$p, $nul]) }}">Nos Produits <i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                        @endif
                        @if(isset($test))
                          <li class="p-21 px-4"><a class="text-white" href="{{ route('session', [$p, $test]) }}">Nos Services <i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                        @else
                        <li class="p-21 px-4"><a class="text-white" href="{{ route('session', [$p, $nul]) }}">Nos Services <i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                        @endif
                        @if(isset($test))
                        <li class="p-21 px-4"><a class="text-white" href="{{ route('about', [$p, $test]) }}">A Propos de Nous <i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                        @else
                        <li class="p-21 px-4"><a class="text-white" href="{{ route('about', [$p, $nul]) }}">A Propos de Nous <i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                        @endif
                        @if(isset($test))
                        <li class="p-21 px-4"><a class="text-white" href="{{ route('contact', [$p, $test]) }}">Nous Contactez <i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                        @else
                        <li class="p-21 px-4"><a class="text-white" href="{{ route('contact', [$p, $nul]) }}">Nous Contactez <i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </header>
        
        <div class="slider">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{asset('css/carrousel 5.jpg')}}" />
                </div>
                <div class="carousel-item">
                  <img src="{{asset('css/carrousel 6.jpg')}}"  />
                </div>

                <div class="carousel-item">
                  <img src="{{asset('css/carrousel 3.jpg')}}"  />
                </div>
               
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>
       
        
        <div class="latest-products pt-5 pb-0">
            
            <div class="container-xl">
                <div class="section-tile row">
                   <div class="col-md-10 text-center mx-auto">
                         <h2>Liste de nos Produits</h2>
                        <p>Chaque produit est d'origine Allemande et de qualité supérieure. Garantie de 03 Mois.</p>
                   </div>
                </div>
                <div class="row mt-5">
                @foreach ($produits::all() as $produit)
                
                <div class="col-lg-3 col-md-4 mb-4" >
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center" >
                            @if(isset($test))
                                <a href="{{ route('summary', [$produit->id, $p, $test] ) }}">
                                    <img src="{{asset($produit->image)}}" width="500px" />
                                </a>
                            @else
                                <a href="{{ route('summary', [$produit->id, $p, $nul] ) }}">
                                    <img src="{{asset($produit->image)}}" width="500px" />
                                </a>
                            @endif
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold">{{ $produit->nom }}</h4>
                                <b class="fs-4 text-danger" style="background-color: purple; color: white;">CFA {{ $produit->prix }}</b>
                                
                                
                    <ul class="mt-0 mt-2 mb-3 vgth">
                        <li class="fs-8">
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('css/star.jpg')}}" width=50pxpx" /></i>
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('css/star.jpg')}}" width=50px" /></i>
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('css/star.jpg')}}" width=50px" /></i>
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('css/star.jpg')}}" width=50px" /></i>
                            
                            
                        </li>
                        <li class="float-end gvi">
                            <i class="bi text-danger bi-heart-fill"></i>
                        </li>
                    </ul>
                                <div class="row pt-2">
                                    <div class="col-md-6">
                                        @if(isset($test))
                                        <a href="{{ route('acheter', [$produit->id, $p, $test] ) }}">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger" style="background-color: purple; color: white;">Achetez</button>
                                        </a>
                                        @else
                                        <a href="{{ route('acheter', [$produit->id, $p, $nul] ) }}">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger" style="background-color: purple; color: white;">Achetez</button>
                                        </a>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        @if(isset($test))
                                        <a href="{{ route('increment', [$produit->id, $p, $test] ) }}">
                                          <button class="btn fw-bold w-100 btn-outline-danger" style="background-color: purple; color: white;">Ajouter au Panier</button>
                                        </a>
                                        @else
                                        <a href="{{ route('increment', [$produit->id, $p, $nul] ) }}">
                                          <button class="btn fw-bold w-100 btn-outline-danger" style="background-color: purple; color: white;">Ajouter au Panier</button>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach    
                </div>
                <div class="col-md-6" right="500px">
                @if(isset($test))
                    <a href="{{ route('stock', [$p, $test]) }}" right="600px" >
                    <button  style="background-color: red;float: right; color: white; font-weight: bold; width : 300px;" >Voir Tous les produits</button>
                    </a>
                @else
                    <a href="{{ route('stock', [$p, $nul]) }}" right="600px" >
                    <button  style="background-color: fuchsia; float: right; color: white; font-weight: bold; width : 300px;" >Voir Tous les produits</button>
                    </a>
                @endif
                </div>  
                  
        <div class="popular-brands big-padding bg-white container-fluid">
            <div class="container">
                 <div class="section-tile row">
                   <div class="col-md-10 text-center mx-auto">
                         <h2>Nos Services</h2>
                        <p>La Brocante Dongmo réponds à toutes vos attentes. Chez nous le client est Roi.</p>
                   </div>
                </div>
<div class="row mt-5">
                @foreach ($formations::all() as $formation)
                
                <div class="col-lg-3 col-md-4 mb-4" >
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center" >
                            @if(isset($test))
                                <a href="{{ route('summaryy', [$formation->id, $p, $test] ) }}">
                                    <img src="{{asset($formation->image)}}" width="1000px"  />
                                </a>
                            @else
                                <a href="{{ route('summaryy', [$formation->id, $p, $nul] ) }}">
                                    <img src="{{asset($formation->image)}}" width="1000px" />
                                </a>
                            @endif
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold">{{ $formation->nom }}</h4>
                                
                                
                                
                    <ul class="mt-0 mt-2 mb-3 vgth">
                        <li class="fs-8">
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('css/star.jpg')}}" width=50pxpx" /></i>
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('css/star.jpg')}}" width=50px" /></i>
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('css/star.jpg')}}" width=50px" /></i>
                            
                           
                            
                        </li>
                        <li class="float-end gvi">
                            <i class="bi text-danger bi-heart-fill"></i>
                        </li>
                    </ul>
                                <div class="row pt-2">
                                    <div class="col-md-6">
                                    @if(isset($test))
                                        <a href="">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger" style="background-color: purple; color: white;">Service Garanti</button>
                                        </a>
                                    @else
                                        <a href="">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger" style="background-color: purple; color: white;">Service Garanti</button>
                                        </a>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach    
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
