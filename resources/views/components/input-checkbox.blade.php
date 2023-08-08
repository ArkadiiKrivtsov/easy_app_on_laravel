@props(['class' => '', 'checked' => false])

<input {{ $checked ? 'checked' : '' }} {{ $attributes->merge([
    'type' => 'checkbox',
    'name' => '',
    'class' => $class,
]) }}><br>
