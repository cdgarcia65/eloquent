@extends('layout')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Eloquent</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis quae ratione quis a error iure! Consequuntur molestias architecto itaque placeat totam, similique voluptatum incidunt aut, iusto iure fugit omnis debitis?</p>
        </div>
    </div>
    <br>
    <div class="container">        
        <h1 class="page-header">
            Últimos usuarios registrados
        </h1>
        
        @include('partials.explanation')
        <br>
        <table class="table table-hover table-striped">
            @include('partials.head-users')
            <tbody>
                @include('partials.list-users')
            </tbody>
        </table>
    </div>
@endsection