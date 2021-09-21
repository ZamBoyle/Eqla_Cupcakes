<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/site.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
    {{ $customHead ?? '' }}
    <title>{{ $title}}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="d-inline-block align-top" width="30" height="30" src="./Images/logo.png" aria-label="Logo compagnie" /> Crazy Cupcakes
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContenu" aria-controls="navbarContenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarContenu" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a class='nav-link' href="{{ url('/') }}">
                        Accueil {!! Request::is('/') ? '<span class="sr-only">(courant)</span>' : '' !!}</a>
                </li>
                <li class="nav-item {{ Request::is('products') ? 'active' : '' }}"><a class='nav-link' href="{{ url('products') }}">
                        Cupcakes {!! Request::is('/products') ? '<span class="sr-only">(courant)</span>' : '' !!}</a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}"><a class='nav-link' href="{{ url('about') }}">
                        A propos {!! Request::is('/about') ? '<span class="sr-only">(courant)</span>' : '' !!}</a>
                </li>
                <li class="nav-item {{ Request::is('contacts') ? 'active' : '' }}"><a class='nav-link' href="{{ url('contacts') }}">
                        Contacts {!! Request::is('/contacts') ? '<span class="sr-only">(courant)</span>' : '' !!}</a>
                </li>
            </ul>
            <i class="bi bi-cart mr-2 p-1 border text-white" title="Panier"></i>
            <form class="form-inline my-2 my-lg-0" action="{{ url('search') }}" method="post">
                @csrf
                <input name="what" class="form-control mr-sm-2" type="search" placeholder="Rechercher produits" aria-label="Rechercher produits" required>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" aria-label="Rechercher">Rechercher</button>
                <input type="hidden" name="searchBy" value="something">
            </form>
        </div>
    </nav>

    {{ $slot }}

    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
    {{ $customBottom ?? ''}}
</body>

</html>