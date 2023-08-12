@extends('layout.main')

@section('title', 'Товары')

@section('content')
    <form class="stocks_list" action="/goods/stock" method="POST">
        @csrf
        <label for="stocks">Остаток:</label>
        <select name="stocks_id">
            <option value="0">Все склады</option>
            @include('pages.blocks.stocks-list')
        </select>
        <button type="submit">Показать</button>
    </form>

    <div class="main_table">
        <x-table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Название товара</th>
                <th>Код в системе продавца</th>
                <th>Остаток</th>
            </tr>
            </thead>

            @include('pages.blocks.goods-table-body')

        </x-table>
    </div>

@endsection

