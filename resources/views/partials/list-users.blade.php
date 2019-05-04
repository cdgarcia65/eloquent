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
</tr>
@endforeach