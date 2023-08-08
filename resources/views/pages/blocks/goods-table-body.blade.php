<tbody>
@php
    foreach ($goods as $good) { @endphp
<tr>
    <td>{{ $good->id }}</td>
    <td>{{ $good->name }}</td>
    <td>{{ $good->quantity }}</td>
</tr>
@php } @endphp
</tbody>
