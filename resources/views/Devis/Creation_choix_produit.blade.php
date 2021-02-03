@extends('layouts.app')

@section('css')
<link href="{{ asset('css/devis2.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Accueil</a></li>
        <li class="breadcrumb-item">Création d'un nouveau devis (Choix du produit)</li>
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
            <form action="/devis3">
                <div class="colonnes">
                    <div class="colonne">
                        <label for="finition_exterieur">Gamme et modèle</label>
                        <select class="custom-select custom-select-lg mb-3">
                            <option selected>Gamme 1</option>
                            <option value="1">Gamme 2</option>
                            <option value="2">Gamme 3</option>
                            <option value="3">Gamme 4</option>
                        </select>

                        <select class="custom-select custom-select-lg mb-3">
                            <option selected>Modèle 1</option>
                            <option value="1">Modèle 2</option>
                            <option value="2">Modèle 3</option>
                            <option value="3">Modèle 4</option>
                        </select>
                    </div>

                    <div class="colonne">
                        <div class="form-group">
                            <label for="finition_exterieur">Finitions exterieurs</label>
                            <select class="custom-select custom-select-lg mb-3" id="finition_exterieur">
                                <option selected>Bois</option>
                                <option value="1">Crepis</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="type_isolant">Type d'isolant</label>
                            <select class="custom-select custom-select-lg mb-3" id="type_isolant">
                                <option selected>Naturel</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="type_couverture">Type de couverture</label>
                            <select class="custom-select custom-select-lg mb-3" id="type_couverture">
                                <option selected>Ardoises</option>
                            </select>
                        </div>
                    </div>
                    <div class=colonne>
                        <div class="form-group">
                            <label for="qualite_huisserie">Qualité des huisseries</label>
                            <select class="custom-select custom-select-lg mb-3" id="qualite_huisserie">
                                <option selected>Excellente</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ossature_bois">Ossature bois</label>
                            <select class="custom-select custom-select-lg mb-3" id="ossature_bois">
                                <option selected>Sans angle</option>
                            </select>
                        </div>
                    </div>
                </div>

                <a role="button" class="btn btn-outline-danger" href="/devis1">Précédant</a>
                <button type="submit" class="btn btn-primary float-right">Suivant</button>
            </form>
        </div>
    </div>

@endsection
