@extends('layouts.app')

@section('css')
<script type="text/javascript" src="{{ URL::asset('js/components/composant.js')}}"></script>
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
            <form action="/composants">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                                <!-- Lisse -->
                                <ul class="list-group">
                                    <li id="listLisseId" class="list-group-item">
                                        <input type="checkbox" class="custom-control-input" id="lissesCheck">
                                        <label class="custom-control-label" for="lissesCheck"><a class="h4" onclick="displayLisseContent();" style="cursor:pointer"> Lisses &raquo</a></label>
                                    </li>
                                <!-- Contreforts -->
                                    <li id="listContreFortId" class="list-group-item">

                                        <a class="h4" onclick="displayContrefortsContent();" style="cursor:pointer" > Contreforts &raquo</a>
                                    </li>
                                <!-- Support de sol -->
                                    <li id="listSupportSolId" class="list-group-item">
                                        <a class="h4" onclick="displaySupportSolContent();" style="cursor:pointer"> Support de sol &raquo</a>
                                    </li>
                                <!-- Montant -->
                                    <li id="listMontantId" class="list-group-item">
                                        <a class="h4" onclick="displayMontantContent();" style="cursor:pointer"> Montant &raquo</a>
                                    </li>
                                <!-- Sabots -->
                                    <li id="listSabotId" class="list-group-item">
                                        <a class="h4" onclick="displaySabotsContent();" style="cursor:pointer"> Sabots &raquo</a>
                                    </li>
                                <ul>

                        </div>
                        <div class="col-sm-8">
                            <div class="p-3 mb-2 bg-light text-dark" style="text-align:center">
                                <!-- Contenu à afficher en fonction du clique -->
                                <h4 id="no-click" style="padding:37px"> Veuillez choisir un des composants présent sur la gauche afin de compléter la page.</h4>
                                <div class="container">
                                    <div id="lisseContent" class="d-none">
                                        <div class="row">
                                            <p class="text-justify"> Lisse </p>

                                            <p class="text-justify"> Quanitité </p>

                                        </div>
                                    </div>
                                    <div id="contrefortContent" class="d-none">
                                        <div class="row">

                                        </div>
                                    </div>
                                    <div id="supportsolContent" class="d-none">
                                        <div class="row">

                                        </div>
                                    </div>
                                    <div id="montantContent" class="d-none">
                                        <div class="row">

                                        </div>
                                    </div>
                                    <div id="sabotsContent" class="d-none">
                                        <div class="row">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        <a role="button" class="btn btn-outline-danger" href="/coupePrincipe">Annuler</a>
                        <button type="submit" class="btn btn-primary float-right">Suivant</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
