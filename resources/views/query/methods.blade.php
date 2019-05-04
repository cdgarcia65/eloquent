@extends('layout')

@section('content')
    <div class="container">        
        <h1 class="page-header">
            {{ $title }}
        </h1>
        
        @include('partials.explanation')
        <br>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Biography</th>
                </tr>
            </thead>
            <tbody>
                @include('partials.list-users')
            </tbody>
        </table>
    </div>
@endsection