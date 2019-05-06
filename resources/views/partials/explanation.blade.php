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
        <li>
            <strong>Método orderBy: </strong> El método orderBy se utiliza para order los registros obtenidos de la 
            base de datos, recibe como primer parámetro la columna por la cual vamos a ordenar los registros y como 
            segundo parámetro la dirección hacia donde vamos a ordenar los registros que puede ser ascendente o descendente:
            <ul>
                <li>
                    <strong>User::orderBy('id', 'desc')->get(); :</strong>
                    Ordena los registros por <strong>ID</strong> de manera descendente: <br>
                    <strong>select * from users order by id desc;</strong>
                </li>
                <li>
                    <strong>User::orderBy('id', 'asc')->get(); :</strong>
                    Ordena los registros por <strong>ID</strong> de manera ascendente: <br>
                    <strong>select * from users order by id asc;</strong>
                </li>
            </ul>
        </li>
        <li>
            <strong>Método take:</strong> Establece un límite de registros a obtener a través de el primer parámetro
            <ul>
                <li>
                    <strong>User::orderBy('id', 'desc') <br>
                        ->take(10)
                        ->get(); <br>
                        select * from users order by id desc limit 10;
                    </strong>
                </li>
            </ul>
        </li>
        <li>
            <strong>Método delete: </strong> Elimina un registro de la tabla, sin embargo, antes se debe obtener el 
            modelo del cual se requiere eliminar el registro, y esto lo hacemos a través del método <strong>find($id)</strong>
            pasando como parámetro a este método el id:
            <ul>
                <li>
                    <strong>$user = User::find($id); <br>
                        => select * from users where id = $id; <br>
                        $user->delete(); => delete from users where id = $id;
                    </strong>
                </li>
            </ul>
        </li>
    </li>
</ul>