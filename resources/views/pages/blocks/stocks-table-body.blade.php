<tbody>
@php
    foreach ($stocks as $stock) { @endphp
<tr>
    <td>{{ $stock->id }}</td>
    <td>{{ $stock->name }}</td>
    <td>{{ $stock->code }}</td>
</tr>
@php } @endphp
</tbody>
