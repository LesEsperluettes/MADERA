@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/accueil.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
    <ol class="breadcrumb" style="border : 2px solid black; background-color : rgb(50, 85, 115); color:rgb(181, 215, 244)">
        <li class="breadcrumb-item">Accueil</li>
    </ol>
@endsection

@section('body')
    <h1>Accueil</h1>

    <div class="row">
        <div class="col-sm">
            <div class="row row-cols-1">
                <div class="col m-1">
                    <div class="card" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <svg class="bd-placeholder-img card-img" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                    <rect width="100%" height="100%" fill="#777"></rect>
                                </svg> </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Devis n°4</h5>
                                    <p class="card-text"><small class="text-muted">Dernière modification il y a 2
                                            minutes</small>
                                    </p>
                                    <a href="#" class="btn btn-outline-primary">Ouvrir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-1">
                    <div class="card" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <svg class="bd-placeholder-img card-img" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                    <rect width="100%" height="100%" fill="#777"></rect>
                                </svg> </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Devis n°3</h5>
                                    <p class="card-text"><small class="text-muted">Dernière modification il y a 35
                                            minutes</small>
                                    </p>
                                    <a href="#" class="btn btn-outline-primary">Ouvrir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-1">
                    <div class="card" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <svg class="bd-placeholder-img card-img" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                    <rect width="100%" height="100%" fill="#777"></rect>
                                </svg> </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Devis n°2</h5>
                                    <p class="card-text"><small class="text-muted">Dernière modification il y a 49
                                            minutes</small>
                                    </p>
                                    <a href="#" class="btn btn-outline-primary">Ouvrir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-1">
                    <div class="card" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <svg class="bd-placeholder-img card-img" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                    <rect width="100%" height="100%" fill="#777"></rect>
                                </svg> </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Devis n°1</h5>
                                    <p class="card-text"><small class="text-muted">Dernière modification il y a 1
                                            heure</small></p>
                                    <a href="#" class="btn btn-outline-primary">Ouvrir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm" style="display: flex; align-items: center; flex-direction: column;">
            <div class="row justify-content-center" style="width:70%">
                <div class="col-sm" style="display: flex; align-items : center; justify-content : center;">
                    <a role="button" class="btn btn-primary btn-block btn-options m-3" href='/contacts' style="width : 100%; font-size: 25px;">Contacts</a>
                </div>
            </div>
            <div class="row justify-content-center" style="width:70%">
                <div class="col-sm" style="display: flex; align-items : center; justify-content : center;">
                    <a role="button" class="btn btn-primary btn-block btn-options m-3" href='{{ route('devis_etape_1') }}' style="width : 100%; font-size: 25px;">Création d'un nouveau
                        devis</a>
                </div>
            </div>
        </div>
    </div>




@endsection
