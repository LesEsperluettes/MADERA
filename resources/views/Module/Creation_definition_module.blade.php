@extends('layouts.app')

@section('content')
<!-- TODO: la récupération du script ne se fait pas à ce niveau -->
<script src="{{ asset('js/components/cctp.js')}}"></script>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb" style="border : 2px solid black; background-color : rgb(50, 85, 115); color:rgb(181, 215, 244)">
        <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
        <li class="breadcrumb-item" style="color:rgb(181, 215, 244)">Création module</li>
    </ol>
@endsection

@section('body')
<!-- TODO: Lien vers le js mais pas au bon endroit sur la page il me semble -->
<script src="{{ asset('js/components/cctp.js')}}"></script>
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
            <form action="/coupePrincipe">
                <div class="form-group">
                    <div class="p-3 mb-2 bg-light text-dark">
                        <div class="container">
                            <h1 class="display-4"> Nommage </h1>
                            <div class="row">
                                <div class="col">  
                                    <label for="nommage">Nom du module : </label>
                                    <select option class="form-control" id="moduleSelectOption">
                                        <option selected>Module n°1</option>
                                        <option>Module n°2</option>
                                        <option>Module n°3</option>
                                        <option>Module n°4</option>
                                        <option>Module n°5</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="nommage">Choix de la gamme : </label>
                                    <select option class="form-control" id="gammeSelectOption">
                                        <option selected>Confort</option>
                                        <option>X </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="p-3 mb-2 bg-light text-dark">
                        <h1 class="display-4">CCTP</h1>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-auto" >
                                    <!-- TODO: Récupération du radiobutton avec l'affichage ou non des div à créer DalleBetton ou PlotBetton -->
                                    <div>
                                        <input class="form-check-input" type="radio" name="cctp" id="dalleBeton" value="dalleBeton" onclick="displayContent()">
                                        <label class="form-check-label" for="dalleBeton">Dalle en béton</label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="radio" name="cctp" id="plotBeton" value="plotBeton" onclick="displayContent()">
                                        <label class="form-check-label" for="plotBeton">Plot en béton</label>
                                    </div>
                                </div>
                                <!-- TODO: js en fonction de dalleBeton ou plotBeton sélectionné l'affichage ci-dessous change DalleBetton ou PlotBetton -->
                                <!-- DalleBeton , div à créer ?-->
                                <div class="col">
                                    <label for="epaisseurInput">Epaisseur : </label>
                                    <input type="text" class="form-control" id="epaisseurInput" placeholder="10">

                                    <input class="form-check-input" type="checkbox" id="armatureCheck">
                                    <label class="form-check-label" for="armatureCheck">
                                     Avec une armature
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="longueurInput">Longueur : </label>
                                    <input type="text" class="form-control" id="longueurInput" placeholder="100">
                                </div>
                                <div class="col">
                                    <label for="LargeurInput">Largeur : </label>
                                    <input type="text" class="form-control" id="LargeurInput" placeholder="100">
                                </div>
                             <!-- PlotBeton
                                <div class="col" id="plotBetonDisplay">
                                    <label for="hauteurInput">Hauteur : </label>
                                    <input type="text" class="form-control" id="hauteurInput" placeholder="10">

                                    <label for="profondeurInput">Hauteur : </label>
                                    <input type="text" class="form-control" id="profondeurInput" placeholder="10">
                                </div>
                                <div class="col">
                                    <label for="diametreTeteInput">Diamètre tête : </label>
                                    <input type="text" class="form-control" id="diametreTeteInput" placeholder="10">

                                    <label for="diametreCorpsInput">Diamètre corps : </label>
                                    <input type="text" class="form-control" id="diametreCorpsInput" placeholder="10">
                                </div>
                                <div class="col">
                                <label for="diametrePiedInput">Diamètre pied : </label>
                                    <input type="text" class="form-control" id="diametrePiedInput" placeholder="10">
                                </div>
                            </div> -->
                    </div>
                </div>
                <a role="button" class="btn btn-outline-danger" href="/home-be">Annuler</a>
                <button type="submit" class="btn btn-primary float-right">Suivant</button>
            </form>
        </div>
    </div>

@endsection
