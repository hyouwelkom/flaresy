<nav class="navbar navbar-expand-md fixed-top">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item-brand">
                <a class="navbar-brand" href="/">
                    <img class="logo" src="{{ asset('storage/photos/logo.png') }}" alt="Logo Flaresy agence audiovisuelle">
                </a>
            </li>
            <li class="nav-item @if($id_page == 1) active @endif">
                <a class="nav-link" href="/nos-services">NOS SERVICES</a>
            </li>
            <li class="nav-item @if($id_page == 2) active @endif">
                <a class="nav-link" href="/nos-prods">NOS PRODS</a>
            </li>
            <li class="nav-item @if($id_page == 3) active @endif">
                <a class="nav-link" href="/l-equipe">L'ÉQUIPE</a>
            </li>
            <li class="nav-item @if($id_page == 4) active @endif">
                <a class="nav-link" href="/contact">CONTACT</a>
            </li>
        </ul>
    </div>
</nav>
