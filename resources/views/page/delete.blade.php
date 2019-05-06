@extends('layout')

@section('content')
    <div class="alert alert-success">
        El usuario se ha eliminado exitosamente
        <a href="{{ route('home') }}">Regresar al inicio</a>
    </div>
@endsection