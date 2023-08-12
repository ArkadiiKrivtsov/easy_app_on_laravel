@extends('layout.main')

@section('title', 'Склады')

@section('content')

    <p class="download_file"><a href="/download/obrazec.xlsx" download>Скачать образец формы</a>
    <form class="load_file" method="POST" enctype="multipart/form-data" action="{{ route('upload') }}">
        @csrf
        <label>Поле для загрузки остатков:</label>
        <input type="file" name="userfile">
        <button class="load_file_button" type="submit">Загрузить остатки на склады</button>
    </form>

    <div class="main_table">
        <x-table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Название склада</th>
                <th>Код в системе продавца</th>
            </tr>
            </thead>

            @include('pages.blocks.stocks-table-body')

        </x-table>
    </div>

@endsection

