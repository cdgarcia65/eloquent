@extends('layout')

@section('content')
    <div class="container">
        <h1 class="page-header">First, Last</h1>
        @include('partials.explanation')
        <br>

        <h3>Primer registro</h3>
        <p>{{ $user->id }}</p>
        <p>{{ $user->name }}</p>

        <h3>Último registro</h3>
        <p>{{ $last->id }}</p>
        <p>{{ $last->name }}</p>
    </div>


@endsection