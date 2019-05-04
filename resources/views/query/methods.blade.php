@extends('layout')

@section('content')
    <div class="container">        
        <h1 class="page-header">
            {{ $title }}
        </h1>
        
        <ul>
            <li>
                <strong>Método all():</strong> Se utiliza para obtener todos los registros de la tabla especificada 
                por el modelo, es decir, si el model es <strong>User</strong> se obtendrán todos los
                registros de la tabla <strong>users</strong>
                <ul>
                    <li>
                        <strong>User::all() = select * from users;</strong>
                    </li>
                </ul>
                <li>
                    <strong>Método get(): </strong> Se utiliza para obtener todos los registros de la tabla especificada
                    por el modelo, es similar al método <strong>all()</strong> a diferencia que este se utiliza para filtros
                    como por ejemplo:
                    <ul>
                        <li>
                            <strong>User::where('gender', 'f')->get() = select * from users where gender = 'f';</strong>
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>Método where('gender', 'f'):</strong> Se utiliza para filtrar los registros por el nombre de 
                    la columna, el cuál es el primer parámetro, y el valor que es el segundo parámetro. Se puede pasar el 
                    parámetro del operador (=, >, <, <=, >=, etc) cómo segundo parámetro y el valor pasaría a ser el tercer
                    parámetro. cuando el operador es <strong>=</strong> where('gender', 'f') es equivalente a where('gender', '=', 'f'):
                    <ul>
                        <li>
                            <strong>User::where('gender', 'f')->get() = select * from users where gender = 'f';</strong>
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>Método get(['id', 'name', 'gender']) parámetros opcionales:</strong> El método get también recibe un array
                    en el cual se especifican las columnas que queremos seleccionar de la tabla especificada por el modelo:
                    <ul>
                        <li>
                            <strong>User::where('gender', 'f')<br>
                                ->get(['id', 'name', 'gender']); = select id, name, gender from users where gender = 'f';
                            </strong>
                        </li>
                    </ul>
                </li>
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
                @include('query.partials.list-users')
            </tbody>
        </table>
    </div>
@endsection