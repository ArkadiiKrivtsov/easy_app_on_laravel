@extends('layout.auth')

@section('title', 'Добавление пользователя')


@section('auth.content')

    <x-auth-block class="create_user_block">

        <x-auth-block-header>Добавление пользователя</x-auth-block-header>
        <x-form>
            <label>Введите Имя и Фамилию</label>
            <x-auth-input type="text" name="name" placeholder="Иван Иванов" />

            <label>Укажите Email</label>
            <x-auth-input type="email" name="email" placeholder="mail@example.ru" />

            <label>Придумайте пароль</label>
            <x-auth-input type="password" name="password" />

            <label>Повторите пароль</label>
            <x-auth-input type="password" name="password_confirmation" />


            <div class="create_user_button_block">
                <button class="create_user_button" type="submit">Добавить</button>
                <button class="create_user_button" onclick="window.location.href = '{{route('users')}}';">Назад
                </button>
            </div>
        </x-form>
    </x-auth-block>

@endsection
