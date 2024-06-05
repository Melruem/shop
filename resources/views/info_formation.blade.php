@inject('produits', 'App\Models\Produit')
@inject('formations', 'App\Models\Formation')
@inject('conf_formations', 'App\Models\Conf_formation')
@inject('paniers', 'App\Models\Panier')
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
                             <a href="{{ route('panel', [$unique, $test] ) }}">
                                 <button type="button" class="btn btn-light shadow-md border position-relative">
                                  <i class="bi fs-4 bi-basket"></i>
                                  <span class="position-absolute fs-6 top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    @if(isset($test))
                                        {{$test}}
                                    @else
                                        0
                                    @endif
                                  </span>
                                </button>carouselExampleControls
                             </a>
                            
                            <button type="button" class="btn d-none d-md-inline-block ms-3 btn-light shadow-md border position-relative">
                              <i class="bi fs-4 bi-heart"></i>
                              <span class="position-absolute fs-6 top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                0
                               
                              </span>
                            </button>
                            
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
        <div class="section-tile row">
            <div class="col-md-10 text-center mx-auto">
                <h1>Fiche de renseignement !!!</h1>
            </div>
        </div>
        <div class="card-body">
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">
                                <form
                                    action="{{  route('savee', [$id, $unique, $test])}}"
                                    method="post" enctype="multipart/form-data">

                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for="name"
                                                    class="control-label mb-1">@lang('Noms et Prénoms')</label>
                                                <input id="name" name="name" type="text"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for="name"
                                                    class="control-label mb-1">@lang('Date de Naissance')</label>
                                                <input id="naiss" name="naiss" type="date"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="">
                                            </div>
                                        </div>

                                        <label for="x_card_code"
                                                class="control-label mb-1">@lang('Sexe')</label>
                                            <div class="input-group">
                                                <select name="sexe" id="sexe" class="form-control">
                                                    <option value="">@lang('Selectionner un sexe')</option>
                                                    <option value="Fem">@lang('Féminin')</option>
                                                    <option value="Masc">@lang('Masculin')</option>
                                                </select>
                                            </div>

                                            <label for="x_card_code"
                                                class="control-label mb-1">@lang('Langue Parlée')</label>
                                            <div class="input-group">
                                                <select name="langue" id="langue" class="form-control">
                                                    <option value="">@lang('Selectionner une langue')</option>
                                                    <option value="FrA">@lang('Français')</option>
                                                    <option value="Ang">@lang('Anglais')</option>
                                                    <option value="All">@lang('Allemand')</option>
                                                </select>
                                            </div>

                                            <label for="x_card_code"
                                                class="control-label mb-1">@lang('Situation professionnelle')</label>
                                            <div class="input-group">
                                                <select name="situation" id="situation" class="form-control">
                                                    <option value="">@lang('Selectionner votre statut')</option>
                                                    <option value="Etudiant">@lang('Etudiant')</option>
                                                    <option value="Employe">@lang('Employé')</option>
                                                    <option value="Job">@lang('Job')</option>
                                                </select>
                                            </div>

                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for="name"
                                                    class="control-label mb-1">@lang('Numéro Téléphone')</label>
                                                <input id="numero" name="numero" type="text"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for=""
                                                    class="control-label mb-1">@lang('Dernier Diplome')</label>
                                                <input id="diplome" name="diplome" type="text"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="image"
                                                    class="control-label mb-1">@lang('Télécharger le Diplome')</label>
                                                <input id="fichier" name="fichier" type="file"
                                                    value=""
                                                    class="form-control image @error('image') is-invalid @enderror"
                                                    autocomplete="">
                                            </div>

                                
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for=""
                                                    class="control-label mb-1">@lang('Ville Habitée')</label>
                                                <input id="ville" name="ville" type="text"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="">
                                            </div>
                                        </div>
                                        
                                        <button id="payment-button" type="submit"
                                            class="btn btn-lg btn-info btn-student btn-block mt-3">
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

                        <p>Les Entreprises Maelo est une startup qui vous propose des services de qualité dans le domaine de la vente du matériel informatique et les formations de haut niveau avec certification reconnue.</p>

                        <ul>
                            <li>Montée Jouvence, descente Mario en face de Méa Bois</li>
                            <li>marcellin15kenfack@yahoo.fr</li>
                            <li>677 78 30 43</li>
                        </ul>
                    </div>

                    <div class="col-md-3 foot-post">
                        <h4>Dernières Publications</h4>

                        <div class="post-row">
                            <div class="image">
                                <img src="assets/images/blog/1.jpg" alt="">
                            </div>
                            <div class="detail ps-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>

                        <div class="post-row">
                            <div class="image">
                                <img src="assets/images/blog/7.jpg" alt="">
                            </div>
                            <div class="detail p-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>

                        <div class="post-row">
                            <div class="image">
                                <img src="assets/images/blog/6.jpg" alt="">
                            </div>
                            <div class="detail ps-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 foot-services">
                        <h4>Top Categorie</h4>

                        <ul>
                            <li><a href="">Nos Formations</a></li>
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
            <a href="https://www.smarteyeapps.com/">2024 &copy; All Rights Reserved | Designed and Developed by Les Entreprises Maelo.com</a>

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
@section('script')
        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('description');
        </script>
@endsection