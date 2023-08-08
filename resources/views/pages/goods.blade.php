@extends('layout.main')

@section('title', 'Товары')

@section('content')



    <div class="goods_block">
        <x-table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Название товара</th>
                <th>Остаток</th>
            </tr>
            </thead>

            @include('pages.blocks.goods-table-body')

        </x-table>
    </div>

@endsection
