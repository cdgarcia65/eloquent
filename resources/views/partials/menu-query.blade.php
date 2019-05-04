<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Consultas Eloquent
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ route('all') }}">Todos los usuarios (all)</a>
        </li>
        <li>
            <a href="{{ route('get', 'f') }}">Todos los usuarios (Female - get)</a>
        </li>
        <li>
            <a href="{{ route('get', 'm') }}">Todos los usuarios (Male - get)</a>
        </li>
        <li>
            <a href="{{ route('get-custom') }}">Todos los usuarios (Female - get custom con array)</a>
        </li>
    </ul>
</li>