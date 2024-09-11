@extends('master')
@inject('confirmers', 'App\Models\Confirmer')
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
                <div class="card-body">
                                <form
                                    action="{{ route('save') }}"
                                    method="post" enctype="multipart/form-data">

                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for="name"
                                                    class="control-label mb-1">@lang('Nom du produit')</label>
                                                <input id="name" name="name" type="text"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for="name"
                                                    class="control-label mb-1">@lang('quantité')</label>
                                                <input id="quantite" name="quantite" type="text"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="name">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for="name"
                                                    class="control-label mb-1">@lang('nom photo')</label>
                                                <input id="image" name="image" type="text"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="name">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="valid_from"
                                                    class="control-label mb-1">@lang('Prix du produit')</label>
                                                <input id="prix" name="prix" type="text"
                                                    value=""
                                                    class="form-control valid_from @error('valid_from') is-invalid @enderror"
                                                    autocomplete="start">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label for="name"
                                                    class="control-label mb-1">@lang('Description produit')</label>
                                                <input id="description" name="description" type="text"
                                                    class="form-control name @error('name') is-invalid @enderror"
                                                    value=""
                                                    autocomplete="name">
                                            </div>
                                        </div>
                                        
                                        <button id="payment-button" type="submit"
                                            class="btn btn-lg btn-info btn-student btn-block mt-3" style="background-color: black; color: white;">
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
            <a href="https://www.smarteyeapps.com/">2024 &copy; All Rights Reserved | Designed and Developed by Lin_Beauty</a>

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
