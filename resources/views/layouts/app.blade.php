<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Madera</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3" style="display: flex; align-items: baseline">
            <a class="navbar-brand" href="/">Madera</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="/home">Accueil</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"></ul>
                <a role="button" class="btn btn-primary" href="/login">Se connecter</a>
            </div>
        </nav>
    </header>
</head>

<body style="background-color: white;">

    <div class="container">
        <nav aria-label="breadcrumb">
                @yield('breadcrumb')
            </nav>
            @yield('body')
        </div>
    </body>

    </html>
