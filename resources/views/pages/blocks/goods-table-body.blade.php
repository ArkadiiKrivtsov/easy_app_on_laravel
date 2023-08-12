<tbody>
@foreach ($goods as $good)
    <tr>
        <td>{{ $good->id }}</td>
        <td>{{ $good->name }}</td>
        <td>{{ $good->code }}</td>
        @if(isset($stock_id))
            <td>{{ count($good->stocks()->where('stock_id', $stock_id)->get()) }}</td>
        @else
            <td>{{ count($good->stocks()->get()) }}</td>
        @endif
    </tr>
@endforeach
</tbody>
