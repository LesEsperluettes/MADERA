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

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="alert-heading">Exportation du devis</h4>
                        <button type="button" class="btn btn-primary">Imprimer le devis</button>
                        <button type="button" class="btn btn-primary">Exporter en PDF</button>
                        <button type="button" class="btn btn-primary">Partager par email (ou autre)</button>
                    </div>
                </div>
                <div class="col-sm">

                    <div class="col-sm">
                        <div class="alert alert-secondary" role="alert">
                            <h4 class="alert-heading">Exportation du dossier technique</h4>
                            <button type="button" class="btn btn-primary">Imprimer le DT</button>
                            <button type="button" class="btn btn-primary">Exporter en PDF</button>
                            <button type="button" class="btn btn-primary">Partager par email (ou autre)</button>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    @endsection
