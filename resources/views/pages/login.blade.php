@extends('layout.auth')

@section('title', 'Авторизация')

@section('auth.content')

    <x-auth-block>
        <x-auth-block-header>Авторизация</x-auth-block-header>
        <x-form action="{{ route('login') }}">
            <label>Email</label>
            <x-auth-input type="email" name="email" placeholder="Введите Ваш имейл" />

            <label>Пароль</label>
            <x-auth-input type="password" name="password" placeholder="Введите пароль" />

            <button class="auth_button" type="submit">Войти</button>
        </x-form>
    </x-auth-block>

@endsection

