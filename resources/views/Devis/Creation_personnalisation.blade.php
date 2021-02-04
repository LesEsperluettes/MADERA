@extends('layouts.app')

@section('css')
<link href="{{ asset('css/devis3.css') }}" rel="stylesheet">
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
            <div class="open_editor">
                <h1 class="editor_title">Si vous voulez éditer votre modèle</h1>
                <a role="button" class="btn btn-primary btn_editor" href="#">Cliquer ici pour ouvrir l'éditeur</a>
            </div>

            <form method="GET" action="{{ route('devis_etape_3') }}" >
                <div class="buttons">
                    <a role="button" class="btn btn-outline-danger" href="/devis2">Précédant</a>
                    <div class="btn_next">
                        <h4 class="text-center">Sinon vous pouvez continuer --></h4>
                        <button type="submit" class="btn btn-primary float-right">Suivant</button>
                    </div>
                </div>

                <input type="hidden" name="goToNextStep" value="true">
            </form>
        </div>
    </div>

@endsection
