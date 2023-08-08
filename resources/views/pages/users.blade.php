@extends('layout.main')

@section('title', 'Пользователи')

@section('content')

    <x-form action="{{route('user.create')}}" method="get">
        <button class="add_new_user_button">Добавить</button>
    </x-form>

    <div>
        <x-table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя пользователя</th>
                <th>Email</th>
                <th>Удалить</th>
            </tr>
            </thead>

            @include('pages.blocks.users-table-body')

        </x-table>
    </div>
@endsection
