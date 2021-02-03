@extends('layouts.app')

@section('css')
<script type="text/javascript" src="{{ URL::asset('js/components/coupeprincipe.js')}}"></script>
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
                <div class="row">
                    <div class="col-sm-4">
                        <div class="p-3 mb-2 bg-light text-dark">
                            <!-- Mur extérieur -->
                            <div class="row">
                                <a class="h4" onclick="displayMurExtContent();" style="cursor:pointer"> Mur extérieur &raquo</a>
                            </div>
                            <!-- Mur intérieur -->
                            <div class="row">
                                <a class="h4" onclick="displayMurIntContent();" style="cursor:pointer" > Mur intérieur &raquo</a>
                            </div>
                            <!-- Construction intermédiaire -->
                            <div class="row">
                                <a class="h4" onclick="displayConstructIntContent();" style="cursor:pointer"> Construction intermédiaire &raquo</a>
                            </div>
                            <!-- Construction de toit -->
                            <div class="row">
                                <a class="h4" onclick="displayConstructToitContent();" style="cursor:pointer"> Construction de toit &raquo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="p-3 mb-2 bg-light text-dark" style="text-align:center">
                            <!-- Contenu à afficher en fonction du clique -->
                            <h4 id="no-click" style="padding:37px"> Veuillez choisir un des modules présent sur la gauche afin de compléter la coupe de principe.</h4>
                            <div class="container">
                                <div id="murExtContent" class="d-none">
                                    <div class="row">
                                            <div class="col">
                                                <img width="100%" height="100%" src="img\murExt.png" >  </img>
                                            </div>
                                            <div class="col-6">
                                                <span class="fa-stack">
                                                        <!-- The icon that will wrap the number -->
                                                    <span class="fa fa-circle-o fa-stack-1x"></span>
                                                        <!-- a strong element with the custom content, in this case a number -->
                                                        <strong class="fa-stack-1x">
                                                            1- Crépit minéral <input width="100%" height="100%" type="text" class="form-control" id="crepit-murExt" placeholder="3mm">
                                                        </strong>
                                                    </span>
                                                    <span class="fa fa-circle-o fa-stack-2x"></span>
                                                        <strong class="fa-stack-2x">
                                                            2 - Gypse phaser <input type="text" class="form-control" id="gypse-murExt" placeholder="12mm" >
                                                        </strong>
                                                    </span>
                                                    <span class="fa fa-circle-o fa-stack-3x"></span>
                                                        <strong class="fa-stack-3x" >
                                                            3 - EPS/XPS <input type="text" class="form-control" id="epsxps-murExt" placeholder="30mm">
                                                        </strong>
                                                    </span>
                                                    <span class="fa fa-circle-o fa-stack-3x"></span>
                                                        <strong class="fa-stack-3x" >
                                                            4 - OSB <input type="text" class="form-control" id="osb-murExt" placeholder="10mm">
                                                        </strong>
                                                    </span>
                                                    <span class="fa fa-circle-o fa-stack-4x"></span>
                                                        <strong class="fa-stack-4x">
                                                            5 - Chassi de bois <input type="text" class="form-control" id="chassibois-murExt" placeholder="120mm">
                                                        </strong>
                                                    </span>
                                                    <span class="fa fa-circle-o fa-stack-5x"></span>
                                                        <strong class="fa-stack-5x">
                                                            6 - Ouate minérale <input type="text" class="form-control" id="ouate-murExt" placeholder="100 mm">
                                                        </strong>
                                                    </span>
                                                    <span class="fa fa-circle-o fa-stack-5x"></span>
                                                        <strong class="fa-stack-5x">
                                                            7 - Folio isolé sur vapeur <input type="text" class="form-control" id="folio-murExt" placeholder="1 mm">
                                                        </strong>
                                                    </span>
                                                    <span class="fa fa-circle-o fa-stack-5x"></span>
                                                        <strong class="fa-stack-5x">
                                                            8 - Carton de plâtre <input type="text" class="form-control" id="platre-murExt" placeholder="12.5 mm">
                                                        </strong>
                                                    </span>
                                                    <span class="fa fa-circle-o fa-stack-5x"></span>
                                                        <strong class="fa-stack-5x">
                                                            9 - Ponçage et peinture <input type="text" class="form-control" id="poncage-peinture-murExt" placeholder="2 mm">
                                                        </strong>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="murIntContent" class="d-none">
                                    <div class="row">
                                        <div class="col">
                                            <img width="100%" height="100%" src="img\temp-murInt.jpg" >  </img>
                                        </div>
                                        <div class="col-6">
                                            <span class="fa-stack">
                                                <!-- The icon that will wrap the number -->
                                                <span class="fa fa-circle-o fa-stack-1x"></span>
                                                    <!-- a strong element with the custom content, in this case a number -->
                                                    <strong class="fa-stack-1x">
                                                        1 Peinture <input type="text" class="form-control" id="peintureInput-murInt" placeholder="100mm">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-2x"></span>
                                                    <strong class="fa-stack-2x">
                                                        2 Carton de plâtre <input type="text" class="form-control" id="platre-murInt" placeholder="1.25cm" >
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-3x"></span>
                                                    <strong class="fa-stack-3x" >
                                                        3 OSB <input type="text" class="form-control" id="osb-murInt" placeholder="10mm">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-4x"></span>
                                                    <strong class="fa-stack-4x">
                                                        4 Chassi de bois <input type="text" class="form-control" id="chassibois-murInt" placeholder="120mm">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-5x"></span>
                                                    <strong class="fa-stack-5x">
                                                        5 Isolation* <input type="text" class="form-control" id="isolation-murInt" placeholder="10cm">
                                                    </strong>
                                                </span>
                                                <p>* défini par la gamme </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div id="contructIntContent" class="d-none">
                                    <div class="row">
                                        <div class="col">
                                            <img width="100%" height="100%" src="img\constructInt.png" >  </img>
                                        </div>
                                        <div class="col-6">
                                            <span class="fa-stack">
                                            <!-- The icon that will wrap the number -->
                                                <span class="fa fa-circle-o fa-stack-1x"></span>
                                                <!-- a strong element with the custom content, in this case a number -->
                                                    <strong class="fa-stack-1x">
                                                        1- Parquette laminée <input type="text" class="form-control" id="parquette-constructInt" placeholder="10 mm">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-2x"></span>
                                                    <strong class="fa-stack-2x">
                                                        2 - OSB <input type="text" class="form-control" id="osb-constructInt" placeholder="18 mm">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-3x"></span>
                                                    <strong class="fa-stack-3x" >
                                                        3 - Chassi de bois <input type="text" class="form-control" id="chassibois-constructInt" placeholder="200 mm">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-3x"></span>
                                                    <strong class="fa-stack-3x" >
                                                        4 - Ouate minérale <input type="text" class="form-control" id="ouate-constructInt" placeholder="100 mm">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-4x"></span>
                                                    <strong class="fa-stack-4x">
                                                        5 - Construction carton de plâtre <input type="text" class="form-control" id="constructionPlatre-constructInt">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-5x"></span>
                                                    <strong class="fa-stack-5x">
                                                        6 - carton de plâtre <input type="text" class="form-control" id="platre-constructInt" placeholder="1.25 cm">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-5x"></span>
                                                    <strong class="fa-stack-5x">
                                                        7 - Peinture <input type="text" class="form-control" id="peinture-constructInt" placeholder="1 mm">
                                                    </strong>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div id="contructToitContent" class="d-none">
                                    <div class="row">
                                        <div class="col">
                                            <img width="100%" height="100%" src="img\constructToit.png" >  </img>
                                        </div>
                                        <div class="col-6">
                                            <span class="fa-stack">
                                                <!-- The icon that will wrap the number -->
                                                <span class="fa fa-circle-o fa-stack-1x"></span>
                                                <!-- a strong element with the custom content, in this case a number -->
                                                    <strong class="fa-stack-1x">
                                                        1- Tuiles <input type="text" class="form-control" id="tuiles-constructToit">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-2x"></span>
                                                    <strong class="fa-stack-2x">
                                                        2 - Folio <input type="text" class="form-control" id="folio-constructToit" placeholder="1 mm" >
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-3x"></span>
                                                    <strong class="fa-stack-3x" >
                                                        3 - OSB <input type="text" class="form-control" id="osb-constructToit" placeholder="18 mm">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-3x"></span>
                                                    <strong class="fa-stack-3x" >
                                                        4 - Poutre <input type="text" class="form-control" id="poutre-constructToit" placeholder="16 cm">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-4x"></span>
                                                    <strong class="fa-stack-4x">
                                                        5 - Ouate <input type="text" class="form-control" id="ouate-constructToit" placeholder="5 cm">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-5x"></span>
                                                    <strong class="fa-stack-5x">
                                                        6 - Ouate 5cm + folio d'aluminium <input type="text" class="form-control" id="ouate-constructToit" placeholder="3 mm">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-5x"></span>
                                                    <strong class="fa-stack-5x">
                                                        7 - Phaser <input type="text" class="form-control" id="phaser-constructToit" placeholder="3 mm">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-5x"></span>
                                                    <strong class="fa-stack-5x">
                                                        8 - Carton de plâtre <input type="text" class="form-control" id="platre-constructToit" placeholder="1.25 cm">
                                                    </strong>
                                                </span>
                                                <span class="fa fa-circle-o fa-stack-5x"></span>
                                                    <strong class="fa-stack-5x">
                                                        9 - Peinture <input type="text" class="form-control" id="peinture-constructToit" placeholder="1 mm">
                                                    </strong>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 mb-2 bg-light text-dark">
                    <a role="button" class="btn btn-outline-danger" href="/creationModule">Annuler</a>
                    <button type="submit" class="btn btn-primary float-right">Suivant</button>
                </div>
            </div>
        </div>
    </div>
@endsection
