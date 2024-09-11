@inject('produits', 'App\Models\Produit')
@inject('formations', 'App\Models\Formation')
<!doctype html>
    <html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Lin_Beauty Entreprise</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/new.css') }}">
        <link rel="stylesheet" href="{{ asset('css/neww.css') }}">
        <link rel="stylesheet" href="{{ asset('css/newww.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/new.js') }}"></script>
        <script src="{{ asset('js/neww.js') }}"></script>
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
        <header class="container-fluid bg-white" >
        
            <div class="header-top bg-gray  border-bottom" style="background-color: black; color: white;" >
                <div class="container" >
                
                @include('success-message')
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="d-inline-flex pt-0 pt-md-2 fs-6">
                                <li class="p-2 " ><i class="bi bi-envelope"></i> Email: lindsaytiomo@gmail.com</li>
                                <li class="p-2 d-none d-md-block" style="background-color: black; color: white;"><i class="bi bi-headphones"></i> 674 83 53 76</li>
                            </ul>
                        </div>
                        <div class="col-md-4 d-flex align-items-end" >
                            <ul class="ms-auto d-inline-flex" >
                                @if(isset($test))
                                <li class="p-2"><a  href="{{ route('log', [$unique, $test] ) }}"><button class="btn px-4 btn-danger" style="background-color: black; color: white;">Login</button></a></li>
                                @else
                                <li class="p-2"><a  href="{{ route('log', [$p, $nul] ) }}"><button class="btn px-4 btn-danger" style="background-color: black; color: white;">Login</button></a></li>
                                @endif
                                @if(isset($test))
                                <li class="p-2"><a  href="{{ route('sign', [$unique, $test] ) }}"><button class="btn px-4 btn-outline-danger" style="background-color: black; color: white;">Sign Up</button></a></li>
                                @else
                                <li class="p-2"><a  href="{{ route('sign', [$p, $nul] ) }}"><button class="btn px-4 btn-outline-danger" style="background-color: black; color: white;">Sign Up</button></a></li>
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
                             @else
                            <a href="{{ route('panel', [$p, $nul] ) }}">
                            @endif
                                 <button type="button" class="btn btn-light shadow-md border position-relative" style="background-color: white; color: white;">
                                  <i class="bi fs-4 bi-basket"></i>
                                  <span class="position-absolute fs-6 top-0 start-100 translate-middle badge rounded-pill " style="background-color: black; color: white;">
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
                                
                                <li class="p-2"><button class="btn px-4 btn-danger" style="background-color: black; color: white;">Bienvenue {{ Auth::user()->name}} !!</button></li>
                                
                                <li class="p-2"><a  href="{{ route('logout') }}" style="background-color: black; color: white;"><button class="btn px-4 btn-danger">Deconnexion</button></a></li>
                                
                            </ul>
                </div>
             @endif
            

            <div class="menu-bar bg-danger container-fluid border-top" style="background-color: black; color: white;">
                <div class="container" style="background-color: black; color: white;">
                   <h6 class="d-md-none text-white p-3 mb-0 fw-bold">Menu 
                  <a class="text-white" data-bs-target="#menu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="menu"><i class="bi cp bi-list float-end fs-1 dmji" ></i></a> 
                   </h6>
                    <ul id="menu" class=" navcol fw-bold d-none d-md-inline-flex" >
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

        <div id="large-header" class="large-header">
  <canvas id="demo-canvas"></canvas>
    <h1 class="main-title">Les Entreprises Lin_Beauty <span class="thin"></span></h1>
</div>
        
        <html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Responsive Vertical Timeline</title>
  
  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,400italic,700,900' rel='stylesheet' type='text/css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- // Fonts -->
</head>
<body>
  <!-- Vertical Timeline -->
  <section id="conference-timeline">
    <div class="timeline-start">Comment commander en ligne!</div>
    <div class="conference-center-line"></div>
    <div class="conference-timeline-content">
      <!-- Article -->
      <div class="timeline-article">
        <div class="content-left-container">
          <div class="content-left">
            <p>Tout d'abord parcourir la liste de nos produits et faites votre choix! <span class="article-number">01</span></p>
          </div>
          <span class="timeline-author"></span>
        </div>
        <div class="content-right-container">
          <div class="content-right">
            <p>Si vous voulez achetez plusieurs produits à la fois, clicquez sur ajouter au panier sur chaque produit. Dans le cas contraire clicquez juste sur achetez! <span class="article-number">02</span></p>
          </div>
          <span class="timeline-author"></span>
        </div>
        <div class="meta-date">
          <span class="date"></span>
          <span class="month"></span>
        </div>
      </div>
      <!-- // Article -->
      
      <!-- Article -->
      <div class="timeline-article">
        <div class="content-left-container">
          <div class="content-left">
            <p>Dans le cas ou vous achetez un produit, une nouvelle page s'affiche. Veuillez fournir les informations concernant le lieu et l'heure de votre livraison!<span class="article-number">03</span></p>
          </div>
          <span class="timeline-author"></span>
        </div>
        <div class="content-right-container">
          <div class="content-right">
            <p>Dans le cas ou vous avez plusieurs articles dans le panier, veuillez clicquez sur l'icone de panier en haut et à droite de l'écran. Une fois la commande confirmée, clicquez sur valider et remplissez vos informations pour votre livraison! <span class="article-number">04</span></p>
          </div>
          <span class="timeline-author"></span>
        </div>
        <div class="meta-date">
          <span class="date"></span>
          <span class="month"></span>
        </div>
      </div>
      <!-- // Article -->
      
      <!-- Article -->
      <div class="timeline-article">
        <div class="content-left-container">
          <div class="content-left">
            <p>Une fois votre commande validée, vous allez recevoir un message de confirmation avec vos informations ! <span class="article-number">05</span></p>
          </div>
          <span class="timeline-author"></span>
        </div>
        <div class="content-right-container">
          <div class="content-right">
            <p>Enfin vous allez recevoir un appel le jour de la livraison pour s'assurer qu'elle est maintenue. Veuillez juste prévoir la monnaie, et remettez l'argent au livreur!<span class="article-number">06</span></p>
          </div>
          <span class="timeline-author"></span>
        </div>
        <div class="meta-date">
          <span class="date"></span>
          <span class="month"></span>
        </div>
      </div>
      <!-- // Article -->
    </div>
    <div class="timeline-end">Fin</div>
  </section>
  <!-- // Vertical Timeline -->
</body>
</html>
       
        
        <div class="latest-products pt-5 pb-0">
            
            <div class="container-xl">
                <div class="section-tile row">
                   <div class="col-md-10 text-center mx-auto">
                         <h2 style="background-color: black; color: white;">Nos produits Cosmétiques</h2>
                        <p style="background-color: black; color: white;">Nos produits sont adaptés à tout type de peau et permet d'améliorer son apparence.</p>
                   </div>
                </div>
                <div class="row mt-5">
                @foreach ($produits::all() as $produit)
                
                <div class="col-lg-3 col-md-4 mb-4" >
                        <div class="bg-white p-2 shadow-md">
                            <div class="text-center" >
                            @if(isset($test))
                                <a href="{{ route('summary', [$produit->id, $p, $test] ) }}">
                                    <img src="{{asset($produit->image)}}" width="300px" />
                                </a>
                            @else
                                <a href="{{ route('summary', [$produit->id, $p, $nul] ) }}">
                                    <img src="{{asset($produit->image)}}" width="300px" />
                                </a>
                            @endif
                            </div>
                            <div class="detail p-2">
                                <h4 class="mb-1 fs-5 fw-bold" style="background-color: black; color: white;">{{ $produit->nom }}</h4>
                                <b class="fs-4 "  >  Détail : {{ $produit->prix }} CFA </b>
                                <b class="fs-4 "  >  en Gros : {{ $produit->prix_global }} CFA </b>
                                
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
                                            <button class="btn mb-2 fw-bold w-100 btn-danger" style="background-color: black; color: white;">Achetez</button>
                                        </a>
                                        @else
                                        <a href="{{ route('acheter', [$produit->id, $p, $nul] ) }}">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger" style="background-color: black; color: white;">Achetez</button>
                                        </a>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        @if(isset($test))
                                        <a href="{{ route('increment', [$produit->id, $p, $test] ) }}">
                                          <button class="btn fw-bold w-100 btn-outline-danger" style="background-color: black; color: white;">Ajouter au Panier</button>
                                        </a>
                                        @else
                                        <a href="{{ route('increment', [$produit->id, $p, $nul] ) }}">
                                          <button class="btn fw-bold w-100 btn-outline-danger" style="background-color: black; color: white;">Ajouter au Panier</button>
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
                    <button  style="background-color: black;float: right; color: white; font-weight: bold; width : 300px;" >Voir Tous les produits</button>
                    </a>
                @else
                    <a href="{{ route('stock', [$p, $nul]) }}" right="600px" >
                    <button  style="background-color: black; float: right; color: white; font-weight: bold; width : 300px;" >Voir Tous les produits</button>
                    </a>
                @endif
                </div>  
                <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
  <!-- 
- Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">

</video>
<div id="polina">
<h4 style="background-color: black; color: white;">Le bienfait de l'utilisation des produits adaptés!</h4>

<p style="background-color: black; color: white;">L’utilisation de produits cosmétiques adaptés à son type de peau peut offrir de nombreux bienfaits pour la peau. Les produits cosmétiques conçus pour répondre aux besoins spécifiques de chaque type de peau peuvent aider à maintenir une peau saine et éclatante, prévenir les problèmes de peau et améliorer l’apparence globale de la peau. Voici quelques avantages de l’utilisation de produits cosmétiques adaptés à son type de peau.</p>
<p style="background-color: black; color: white;">Hydratation adéquate : Les produits cosmétiques pour peau sèche sont conçus pour apporter une hydratation en profondeur, ce qui peut aider à réduire les irritations et les rougeurs. Les produits cosmétiques pour peau grasse, quant à eux, peuvent aider à contrôler la production de sébum et à équilibrer le niveau d’hydratation pour une peau saine et éclatante.</p>

</div>
                  
        <div class="popular-brands big-padding bg-white container-fluid">
            <div class="container">
                 <div class="section-tile row">
                   <div class="col-md-10 text-center mx-auto">
                         <h2 style="background-color: black; color: white;">Nos Services</h2>
                        <p style="background-color: black; color: white;">Lin_Beauty Enterprise réponds à toutes vos attentes. Chez nous le client est Roi.</p>
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
                                <h4 class="mb-1 fs-5 fw-bold" style="background-color: black; color: white;">{{ $formation->nom }}</h4>
                                
                                
                                
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
                                            <button class="btn mb-2 fw-bold w-100 btn-danger" style="background-color: black; color: white;">Service Garanti</button>
                                        </a>
                                    @else
                                        <a href="">
                                            <button class="btn mb-2 fw-bold w-100 btn-danger" style="background-color: black; color: white;">Service Garanti</button>
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
    <script src="{{ asset('js/newww.js') }}"></script>
@endsection
