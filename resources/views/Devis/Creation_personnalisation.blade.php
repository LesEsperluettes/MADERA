@extends('layouts.app')

@section('css')
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
        <li class="breadcrumb-item">Création d'un nouveau devis (Personnalisation du modèle)</li>
    </ol>
@endsection

@section('body')

    <div style="text-align: center;">
        <div class="d-inline">1</div>
        <div class="d-inline">--------------------------------</div>
        <div class="d-inline">2</div>
        <div class="d-inline">--------------------------------</div>
        <div class="d-inline">3</div>
        <div class="d-inline">--------------------------------</div>
        <div class="d-inline">4</div>
    </div>

    <div style="background-color: rgb(218, 235, 249);" class="m-3">
        <div class="p-3">
            <h1 class="text-center">Si vous voulez éditer votre modèle</h1>
            <a role="button" class="btn btn-primary" href="#">Cliquer ici pour ouvrir l'éditeur</a>
            <h2 class="text-center">Sinon vous pouvez continuer</h2>

            <a role="button" class="btn btn-outline-danger" href="/devis2">Précédant</a>
            <a class="btn btn-primary float-right" href="/devis4">Suivant</a>
        </div>
    </div>

@endsection
