@extends('layouts.app')

@section('body')
    <div class="jumbotron" style="display : flex; flex-direction : column; justify-content : center; align-items: center; border-radius : 20px; background-color: #b8babb">
        <h1 class="display-4" style="font-size : 12em; color: rgb(84, 142, 191)">Madera</h1>
        <p class="lead">Insérer une description du service</p>
        <hr class="my-4" style="color : black; width : 50%;">
        <a class="btn btn-primary btn-lg" style="background-color: rgb(50, 85, 115)" href="/home-be" role="button">C'est parti</a>
    </div>
@endsection
