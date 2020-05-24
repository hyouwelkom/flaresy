<nav class="navbar navbar-expand-md fixed-top">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto ml-lg-5 pl-lg-5">
            <li class="nav-item-brand">
                <a class="navbar-brand" href="/">
                    <img class="logo" src="{{ asset('storage/photos/logo.png') }}" alt="Logo Flaresy agence audiovisuelle">
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto small-menu-text justify-content-end mr-lg-5 pr-lg-5">
            <li class="nav-item @if(!empty($id_page)) @if($id_page == 1) active @endif @endif">
                <a class="nav-link" href="/nos-services">NOS SERVICES</a>
            </li>
            <li class="nav-item @if(!empty($id_page)) @if($id_page == 2) active @endif @endif">
                <a class="nav-link" href="/nos-prods">NOS PRODS</a>
            </li>
            <li class="nav-item @if(!empty($id_page)) @if($id_page == 3) active @endif @endif">
                <a class="nav-link" href="/l-equipe">L'ÉQUIPE</a>
            </li>
            <li class="nav-item @if(!empty($id_page)) @if($id_page == 4) active @endif @endif">
                <a class="nav-link" href="/contact">CONTACT</a>
            </li>
            @auth
                <li class="nav-item @if(!empty($id_page)) @if($id_page == 5) active @endif @endif">
                    @if(Auth::user()->isAdmin())
                        <a class="nav-link" href="/administration">ADMINISTRATION</a>
                    @else
                        <a class="nav-link" href="/gestion-de-projet">GESTION DE PROJET</a>
                    @endif
                </li>
            @endauth
        </ul>
    </div>
</nav>
