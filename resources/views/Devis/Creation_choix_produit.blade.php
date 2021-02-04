@extends('layouts.app')

@section('css')
<link href="{{ asset('css/devis2.css') }}" rel="stylesheet">
@endsection

@section('script')
    <script src="{{ asset('js/devis/devis2.js') }}"></script>
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
            <form method="GET" action="{{ route('devis_etape_2') }}" id="step_form">
                <div class="colonnes">
                    <div class="colonne">
                        <label for="finition_exterieur">Gamme et modèle</label>
                        <select class="custom-select custom-select-lg mb-3" name="gammeId" onchange="submitGamme()">
                            <option value="-1">Sélectionnez une gamme</option>
                            @foreach($gammes as $g)
                                <option value="{{ $g->id }}" @if(isset($gamme) && $gamme->id == $g->id) selected @endif >{{$g->nom}}</option>
                            @endforeach
                        </select>

                        <select class="custom-select custom-select-lg mb-3" name="modeleId" @if(!isset($modeles)) disabled @endif>
                            @isset($modeles)
                                @foreach($modeles as $modele)
                                    <option value="{{ $modele->id }}">{{ $modele->nom }}</option>
                                @endforeach
                            @endisset
                        </select>
                    </div>

                    <div class="colonne">
                        <div class="form-group">
                            <label for="finition_exterieur">Finitions exterieurs</label>
                            <select class="custom-select custom-select-lg mb-3" id="finition_exterieur" @if(!isset($modeles)) disabled @endif>
                                @isset($modeles)
                                    <option value="{{ $finition->id }}">{{ $finition->type }}</option>
                                @endisset
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="type_isolant">Type d'isolant</label>
                            <select class="custom-select custom-select-lg mb-3" id="type_isolant" @if(!isset($modeles)) disabled @endif>
                                @isset($modeles)
                                    <option value="{{ $isolant->id }}">{{ $isolant->type }}</option>
                                @endisset
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="type_couverture">Type de couverture</label>
                            <select class="custom-select custom-select-lg mb-3" id="type_couverture" @if(!isset($modeles)) disabled @endif>
                                @isset($modeles)
                                    <option value="{{ $couverture->id }}">{{ $couverture->type }}</option>
                                @endisset
                            </select>
                        </div>
                    </div>
                    <div class=colonne>
                        <div class="form-group">
                            <label for="qualite_huisserie">Qualité des huisseries</label>
                            <select class="custom-select custom-select-lg mb-3" id="qualite_huisserie" @if(!isset($modeles)) disabled @endif>
                                @isset($modeles)
                                    <option value="{{ $huisserie->id }}">{{ $huisserie->type }}</option>
                                @endisset
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ossature_bois">Ossature bois</label>
                            <select class="custom-select custom-select-lg mb-3" id="ossature_bois" @if(!isset($modeles)) disabled @endif>
                                @isset($modeles)
                                    <option value="{{ $ossature->id }}">{{ $ossature->type }}</option>
                                @endisset
                            </select>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="goToNextStep" id="goToNextStep" value="true">
                <a role="button" class="btn btn-outline-danger" href="/devis1">Précédant</a>
                <button type="submit" class="btn btn-primary float-right" @if(!isset($modele)) disabled @endif>Suivant</button>
            </form>
        </div>
    </div>

@endsection
