@props(['class' => 'auth_style'])

<form {{ $attributes->merge([
    'class' => $class,
    'action' => '#',
    'method' => 'post',
]) }}>
    @csrf
    {{ $slot }}
</form>
