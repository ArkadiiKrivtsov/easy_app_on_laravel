@props(['class' => 'auth_block'])

<div {{ $attributes->merge([
    'class' => $class,
]) }}>
    {{ $slot }}
</div>
