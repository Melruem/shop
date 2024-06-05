@inject('produits', 'App\Models\Produit')
@inject('formations', 'App\Models\Formation')
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Les entreprises Maelo</title>
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
                                <li class="p-2 "><i class="bi bi-envelope"></i> marcellin15kenfack@yahoo.fr</li>
                                <li class="p-2 d-none d-md-block"><i class="bi bi-headphones"></i> 677 78 30 43</li>
                            </ul>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <ul class="ms-auto d-inline-flex">
                                <li class="p-2"><a target="_blank" href=""><button class="btn px-4 btn-danger">Login</button></a></li>
                                <li class="p-2"><a target="_blank" href=""><button class="btn px-4 btn-outline-danger">Sign Up</button></a></li>
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
                                <img src="{{asset('content/boutique/logoo.jpg')}}" />
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
                                  <span class="position-absolute fs-6 top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    @if(isset($test))
                                        {{$test}}
                                    @else
                                        0
                                    @endif
                                  </span>
                                  <img src="{{asset('content/boutique/cart.jpg')}}" width=100px" />
                                </button>
                             </a>
                            
                            
                            
                         </div>
                     </div>
                 </div>   
            </div>
            

            <div class="menu-bar bg-danger container-fluid border-top">
                <div class="container">
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
                        <li class="p-21 px-4"><a class="text-white" href="">A Propos de Nous <i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                        <li class="p-21 px-4"><a class="text-white" href="">Nous Contactez <i class="bi pt-2 bi-chevron-down"></i></a> 
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        
     <!--  ************************* Page Title Starts Here ************************** -->
     <div class="page-nav no-margin row">
            <div class="container">
                <div class="row">
                    @isset($produit)
                    <h2 class="text-start">{{ $produit->nom }}</h2>
                    @endisset
                    @isset($formation)
                    <h2 class="text-start">{{ $formation->nom }}</h2>
                    @endisset
                    <ul>
                        <li> <a href="#"><i class="bi bi-house-door"></i> Home</a></li>
                          <li><i class="bi bi-chevron-double-right pe-2"></i> Produit</li>
                        <li><i class="bi bi-chevron-double-right pe-2"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        
        
    <!--####################### Product Detail Starts Here ###################-->
    @isset($produit)
    <div class="container-fluid big-padding bg-white about-cover">
        <div class="container">
            <div class="row about-row">
                <div class="col-md-5 text-center">
                    <img src="{{asset($produit->image)}}" width="500px" />
                </div>
                <div class="col-md-7">
                    <h2>{{ $produit->nom }}</h2>
                    <p>Appartenant à la dernière génération, ce produit vous donnera une entière satisfaction et sera à la hauteur de vos attentes. Il vous ai aussi offert un mois de garanti.</p>
                    <b class="fs-3 py-4 text-danger">Prix : CFA {{ $produit->prix }}</b>
                     
                     <ul class="mt-0 mt-2 mb-3 vgth">
                        <li class="fs-8">
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50pxpx" /></i>
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                            <i class="bi bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                            <span>4,2</span>
                        </li>
                        <li class="float-end gvi">
                            <i class="bi text-danger bi-heart-fill"></i>
                        </li>
                    </ul>
                    <ul class="key-features mt-2">
                        <li><i class="bi bi-caret-right"></i> Ajouté Récemment</li>
                        <li><i class="bi bi-caret-right"></i> Matériaux Robuste</li>
                        <li><i class="bi bi-caret-right"></i> Bien emballé</li>
                        <li><i class="bi bi-caret-right"></i> Délivré à temps</li>
                    </ul>
                </div>
            </div>
            <div class="row pt-2">
                                    <div class="col-md-6">
                                        @if(isset($test))
                                        <a href="{{ route('acheter', [$produit->id, $unique, $test] ) }}">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger">Achetez</button>
                                        </a>
                                        @else
                                        <a href="{{ route('acheter', [$produit->id, $unique, $nul] ) }}">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger">Achetez</button>
                                        </a>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        @if(isset($test))
                                        <a href="{{ route('increment', [$produit->id, $unique, $test] ) }}">
                                          <button class="btn fw-bold w-100 btn-outline-danger">Ajouter au Panier</button>
                                        </a>
                                        @else
                                        <a href="{{ route('increment', [$produit->id, $unique, $nul] ) }}">
                                          <button class="btn fw-bold w-100 btn-outline-danger">Ajouter au Panier</button>
                                        </a>
                                        @endif
                                    </div>
             </div>
            <div class="row product-detail">
               <h4>Détail du Produit :</h4>
                <p class="mb-3">{{ $produit->description }}</p>
            </div>
            <div class="row review">
                <div class="col-md-8">
                     <h4>Appréciation du produit</h4>
                     <div class="row m-0 reviewrow p-3 px-0 border-bottom">
                        <div class="col-md-12 align-items-center col-9 rcolm"> 
                            <div class="review">
                                <li class="col-8 ratfac">
                                     <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                     <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                     <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                     <i class="bi bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                     <i class="bi bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                 </li>              
                            </div>
                            <h3 class="fs-6 fw-semi mt-2">Vinoth kumar

                            <small class="float-end fw-normal"> 20 Aug 2024 </small>
                            </h3>

                            <div class="review-text">
                                 Fonctionne Parfaitement !
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>

                    <div class="row m-0 reviewrow p-3 px-0 border-bottom">
                        <div class="col-md-12 align-items-center col-9 rcolm"> 
                            <div class="review">
                                <li class="col-8 ratfac">
                                     <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                     <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                     <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                     <i class="bi bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                     <i class="bi bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                 </li>              
                            </div>
                            <h3 class="fs-6 fw-semi mt-2">Vinoth kumar

                            <small class="float-end fw-normal"> 20 Aug 2024 </small>
                            </h3>

                            <div class="review-text">
                                Satisfait !
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>

                    <div class="row m-0 reviewrow px-0">
                        <div class="col-md-12 align-items-center col-9 rcolm"> 
                            <div class="review">
                                <li class="col-8 ratfac">
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                 </li>              
                            </div>
                            <h3 class="fs-6 fw-semi mt-2">Vinoth kumar

                            <small class="float-end fw-normal"> 20 Aug 2024 </small>
                            </h3>

                            <div class="review-text">
                                Très content !!
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    @endisset

    @isset($formation)
    <div class="container-fluid big-padding bg-white about-cover">
        <div class="container">
            <div class="row about-row">
                <div class="col-md-5 text-center">
                    <img src="{{asset($formation->image)}}" width="500px" />
                </div>
                <div class="col-md-7">
                    <h2>{{ $formation->nom }}</h2>
                    <p>Formation Professionnelle de haut niveau, donné par des experts diplomés des université américaines et avec diplome attestant la fin de formation reconnue nationalement.</p>
                    <b class="fs-3 py-4 text-danger">Prix : CFA {{ $formation->prix }}</b>
                     
                     <ul class="mt-0 mt-2 mb-3 vgth">
                        <li class="fs-8">
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                            <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                            <i class="bi bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                            <span>4,2</span>
                        </li>
                        <li class="float-end gvi">
                            <i class="bi text-danger bi-heart-fill"></i>
                        </li>
                    </ul>
                    <ul class="key-features mt-2">
                        <li><i class="bi bi-caret-right"></i> Ajouté Récemment</li>
                        <li><i class="bi bi-caret-right"></i> Formation Complexe</li>
                        <li><i class="bi bi-caret-right"></i> Nombreux Projets à faire</li>
                        <li><i class="bi bi-caret-right"></i> Avancée</li>
                    </ul>
                </div>
            </div>
            <div class="row product-detail">
               <h4>Détail de la formation:</h4>
                <p class="mb-3">{{ $formation->description }}</p>
            </div>
            <div class="row review">
                <div class="col-md-8">
                     <h4>Appréciation de la formation</h4>
                     <div class="row m-0 reviewrow p-3 px-0 border-bottom">
                        <div class="col-md-12 align-items-center col-9 rcolm"> 
                            <div class="review">
                                <li class="col-8 ratfac">
                                     <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                     <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                     <i class="bi text-warning bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                     <i class="bi bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                     <i class="bi bi-star-fill"><img src="{{asset('content/boutique/star.jpg')}}" width=50px" /></i>
                                 </li>              
                            </div>
                            <h3 class="fs-6 fw-semi mt-2">Vinoth kumar

                            <small class="float-end fw-normal"> 20 Aug 2024 </small>
                            </h3>

                            <div class="review-text">
                                 Fonctionne Parfaitement !
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>

                    <div class="row m-0 reviewrow p-3 px-0 border-bottom">
                        <div class="col-md-12 align-items-center col-9 rcolm"> 
                            <div class="review">
                                <li class="col-8 ratfac">
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                 </li>              
                            </div>
                            <h3 class="fs-6 fw-semi mt-2">Vinoth kumar

                            <small class="float-end fw-normal"> 20 Aug 2024 </small>
                            </h3>

                            <div class="review-text">
                                Satisfait !
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>

                    <div class="row m-0 reviewrow px-0">
                        <div class="col-md-12 align-items-center col-9 rcolm"> 
                            <div class="review">
                                <li class="col-8 ratfac">
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi text-warning bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                     <i class="bi bi-star-fill"></i>
                                 </li>              
                            </div>
                            <h3 class="fs-6 fw-semi mt-2">Vinoth kumar

                            <small class="float-end fw-normal"> 20 Aug 2024 </small>
                            </h3>

                            <div class="review-text">
                                Très content !!
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    @endisset    
    <footer>
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 foot-about">
                        <h4>About US</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit libero pellentesque libero interdum, id mattis felis dictum. Praesent eget lacus tempor justo efficitur malesuada. Cras ut suscipit nisi.</p>

                        <ul>
                            <li>23 Rose Stren Melbourn</li>
                            <li>sales@smarteyeapps.com</li>
                            <li>+91 876 766 554</li>
                        </ul>
                    </div>

                    <div class="col-md-3 foot-post">
                        <h4>Latest Posts</h4>

                        <div class="post-row">
                            <div class="image">
                                <img src="assets/images/blog/blog_01.jpg" alt="">
                            </div>
                            <div class="detail">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>

                        <div class="post-row">
                            <div class="image">
                                <img src="assets/images/blog/blog_02.jpg" alt="">
                            </div>
                            <div class="detail">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>

                        <div class="post-row">
                            <div class="image">
                                <img src="assets/images/blog/blog_03.jpg" alt="">
                            </div>
                            <div class="detail">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 foot-services">
                        <h4>Top Category</h4>

                        <ul>
                            <li><a href="">Target Statergy</a></li>
                            <li><a href="">Web Analytics</a></li>
                            <li><a href="">Page Monitering</a></li>
                            <li><a href="">Page Optimization</a></li>
                            <li><a href="">Target Statergy</a></li>
                            <li><a href="">Email Marketing</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 foot-news">
                        <h4>News Letter</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, vehicula eget eros. </p>

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
            <a href="https://www.smarteyeapps.com/">2022 &copy; All Rights Reserved | Designed and Developed by Smarteyeapps.com</a>

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

@section('script')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection

</html>
@section('script')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection