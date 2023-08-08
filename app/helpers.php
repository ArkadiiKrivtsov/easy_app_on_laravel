<?php

if (!function_exists('active_link')) {
    function active_link(string $name, string $active = 'active'): string
    {
        return \Illuminate\Support\Facades\Route::is($name) ? $active : '';
    }
}

