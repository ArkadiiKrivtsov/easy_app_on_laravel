@php
    foreach ($stocks as $stock) { @endphp

<option {{ isset($stock_id) && $stock->id == $stock_id ? 'selected' : '' }}
        value="{{ $stock->id }}">{{ $stock->name }}</option>

@php } @endphp

