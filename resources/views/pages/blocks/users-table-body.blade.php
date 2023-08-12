<tbody>
@php
    foreach ($users as $user) { @endphp
<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    @if($user->is_admin)
        <td class="isAdmin">админ
            <i class="fa-solid fa-crown fa-lg"></i>
        </td>
    @else
        <x-td-delete-button action="/delete/{{$user->id}}"/>
    @endif
</tr>
@php } @endphp
</tbody>
