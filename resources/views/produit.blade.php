@inject('produits', 'App\Models\Produit')
@inject('formations', 'App\Models\Formation')
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
    <bod>
        <header class="container-fluid bg-white">
            <div class="header-top bg-gray  border-bottom" style="background-color: black; color: white;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="d-inline-flex pt-0 pt-md-2 fs-6">
                                <li class="p-2 "><i class="bi bi-envelope"></i> Email: lindsaytiomo@gmail.com</li>
                                <li class="p-2 d-none d-md-block" style="background-color: black; color: white;"><i class="bi bi-headphones"></i> 674 83 53 76</li>
                            </ul>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <ul class="ms-auto d-inline-flex">
                                <li class="p-2"><a target="_blank" href=""><button class="btn px-4 btn-danger"style="background-color: black; color: white;">Login</button></a></li>
                                <li class="p-2"><a target="_blank" href=""><button class="btn px-4 btn-outline-danger"style="background-color: black; color: white;">Sign Up</button></a></li>
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
                                <img src="{{asset('css/logo_lin.JPG')}}" />
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
                                 <button type="button" class="btn btn-light shadow-md border position-relative" style="background-color: white; color: white;">
                                  <i class="bi fs-4 bi-basket"></i>
                                  <span class="position-absolute fs-6 top-0 start-100 translate-middle badge rounded-pill "style="background-color: purple; color: white;">
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
            

            <div class="menu-bar bg-danger container-fluid border-top"style="background-color: white; color: white;">
                <div class="container"style="background-color: white; color: white;">
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
        <div class="latest-products pt-5 pb-0" style="background-color: white; color: white;">
            <div class="container-xl">
                <div class="section-tile row">
                   <div class="col-md-10 text-center mx-auto">
                         <h2 style="background-color: white; color: white;">Liste des produits :</h2>
                        <p style="background-color: white; color: white;">Chaque produit d'origine Allemande est livrée avec garantie de un mois.</p>
                   </div>
                </div>
                <div class="row mt-5">
                @foreach ($produits::all() as $produit)
                
                <div class="col-lg-3 col-md-4 mb-4" >
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center" >
                                <a href="{{ route('summary',[$produit->id, $unique, $test] ) }}">
                                    <img src="{{asset($produit->image)}}" width="500px" />
                                </a>
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold" style="background-color: white; color: white;">{{ $produit->nom }}</h4>
                                <b class="fs-4 text-danger" style="background-color: white; color: white;">CFA {{ $produit->prix }}</b>
                                
                                
                                <ul class="mt-0 vgth">
                                    <li class="fs-8">
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi text-warning bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </li>
                                    <li class="float-end gvi">
                                        <i class="bi text-danger bi-heart-fill"></i>
                                    </li>
                                </ul>
                                <div class="row pt-2">
                                    <div class="col-md-6">
                                        <a href="detail.html">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger"style="background-color: purple; color: white;">Achetez</button>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('increment', [$produit->id, $unique, $test] ) }}">
                                          <button class="btn fw-bold w-100 btn-outline-danger"style="background-color: white; color: white;">Ajouter au Panier</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach    
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
