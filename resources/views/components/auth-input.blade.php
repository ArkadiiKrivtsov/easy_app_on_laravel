<input {{ $attributes->merge([
    'type' => 'text',
    'name' => '',
    'placeholder' => '',
    'value' => old($attributes->get('name')),
    'required' => true,
    'class' => $errors->has($attributes->get('name')) ? 'auth_input danger' : 'auth_input',
]) }}>


