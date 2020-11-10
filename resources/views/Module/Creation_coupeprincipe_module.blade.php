@extends('layouts.app')

@section('css')
@endsection

@section('breadcrumb')
    <ol class="breadcrumb" style="border : 2px solid black; background-color : rgb(50, 85, 115); color:rgb(181, 215, 244)">
        <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
        <li class="breadcrumb-item" style="color:rgb(181, 215, 244)">Création module</li>
    </ol>
@endsection

@section('body')

    <div style="text-align: center;">
        <!-- Définition -->
        <div class="d-inline">1</div>
        <div class="d-inline">--------------------------------</div>
        <!--  Coupe de principe -->
        <div class="d-inline">2</div>
        <div class="d-inline">--------------------------------</div>
        <!-- Composants -->
        <div class="d-inline">3 </div>
        <div class="d-inline">--------------------------------</div>
        <!-- Paramètres -->
        <div class="d-inline">4 </div>
        <div class="d-inline">--------------------------------</div>
        <!-- Résumé -->
        <div class="d-inline">5 </div>
    </div>

    <div style="background-color:#B5D7F4" class="m-3">
        <div class="p-3">
            <div class="container">
                <!-- Mur extérieur -->
                <div class="row">
                    <a class="h4" href='/murExt'> Mur extérieur </a>
                </div>
                <!-- Mur intérieur -->
                <div class="row">
                    <a class="h4" href='/murInt' > Mur intérieur </a>
                </div>
                <!-- Construction intermédiaire -->
                <div class="row">
                    <a class="h4" href='/constructInterm'> Construction intermédiaire </a>
                </div>
                <!-- Construction de toit -->
                <div class="row">
                    <a class="h4" href='/constructToit'> Construction de toit </a>
                </div>
            </div>
        </div>

    </div>
@endsection