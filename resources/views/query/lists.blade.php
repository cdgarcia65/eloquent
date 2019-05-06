@extends('layout')

@section('content')
    <br>
    <h1>Lista de usuarios para un select (lists)</h1>

    @include('partials.explanation')

    <br>
    <select name="users" class="form-control">
        @foreach($users as $name => $id)
        <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>

    <br>
@endsection