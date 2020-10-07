@extends('layouts.app')

@section('css')
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
        <li class="breadcrumb-item">Création d'un nouveau devis (Terminé)</li>
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
        <h1>Devis N°X créé et enregistré avec succès !</h1>
    </div>

@endsection
