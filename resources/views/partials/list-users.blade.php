@foreach($users as $user)
<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
        @if ($user->gender == 'f')
            <span class="label label-info">Female ({{ $user->gender }})</span>
        @else
            <span class="label label-primary">Male ({{ $user->gender }})</span>
        @endif
    </td>
    <td>{{ $user->biography }}</td>
    <td>
        <form action="{{ route('delete', $user->id) }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
        </form>
    </td>
</tr>
@endforeach