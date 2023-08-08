@extends('layout.main')

@section('title', 'Настройки')

@section('content')

    <x-form class="main_form">
        @method('PUT')
        <div>
            <label>Access token</label>
            <x-input-token value="{{ $settings->access_token }}"/>
        </div>

        <div>
            <label>Передавать остатки</label>
            <x-input-checkbox name="is_transfer_balances"
                checked="{{ $settings->is_transfer_balances }}"/>
        </div>

        <div>
            <label>Передавать цены</label>
            <x-input-checkbox class="input_is_transfer_prices" name="is_transfer_prices"
                checked="{{ $settings->is_transfer_prices }}"/>

        </div>
        <button type="submit">Сохранить</button>
    </x-form>

@endsection

{{--@php--}}
{{--var_dump((bool)$settings->is_transfer_prices);--}}

{{--    @endphp--}}
