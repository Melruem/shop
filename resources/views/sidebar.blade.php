
<aside >
    <nav >


        <div class="menu-bar bg-danger container-fluid border-top"style="background-color: purple; color: white;">
            <div class="container"style="background-color: purple; color: white;">
            <ul id="menu" class=" navcol fw-bold d-none d-md-inline-flex">
                <li class="p-21 px-4" >
                    <a class="text-white" href="{{ route('dashboard') }}"> <i class="bi pt-2 bi-chevron-down"></i>@lang('Tableau de bord ') </a>
                </li>

                    
                        <li class="p-21 px-4" >
                            <a class="text-white" href="{{ route('add') }}"> <i class="bi pt-2 bi-chevron-down"
                                    class="menu-icon fa fa-bars"></i>@lang('Ajout produit')
                            </a>
                        </li>
        
                        <li class="p-21 px-4" >
                            <a class="text-white" href="{{ route('produit') }}"> <i class="bi pt-2 bi-chevron-down"></i>@lang('Liste des produits')
                            </a>
                        </li>


                
                <li class="p-21 px-4">
                    <a class="text-white" href="{{ route('waiting') }}"> <i
                          class="bi pt-2 bi-chevron-down"  ></i>@lang('Comande en attente')
                    </a>
                </li>

                
                <li class="p-21 px-4" >
                    <a class="text-white" href="{{ route('complet') }}"> <i
                         class="bi pt-2 bi-chevron-down"   ></i>@lang('Commandes terminées')
                    </a>
                </li>

                
                    <li class="p-21 px-4">
                        <a class="text-white" href="{{ route('stay') }}"> <i
                                class="bi pt-2 bi-chevron-down"></i>@lang('Souscription En attente')
                        </a>
                    </li>

                    
                    <li class="p-21 px-4" >
                        <a class="text-white"  href="{{ route('zubete') }}"> <i
                                class="bi pt-2 bi-chevron-down"></i>@lang('Souscription Terminée')
                        </a>
                    </li>
            </ul>
        </div>
    </nav>
</aside>
