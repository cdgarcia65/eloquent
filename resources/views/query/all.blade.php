@extends('layout')

@section('content')
    <div class="container">        
        <h1 class="page-header">
            Todos los usuarios (all)
        </h1>
        
        <p>
            Método all(): Se utiliza para obtener todos los registros de la tabla especificada 
            por el modelo, es decir, si el model es <strong>User</strong> se obtendrán todos los
            registros de la tabla <strong>users</strong>
        </p>
        <ul>
            <li>
                <strong>User::all() = select * from users;</strong>
                <span class="glyphicon glyphicon-chevron-down"></span>
            </li>
        </ul>
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
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->biography }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection