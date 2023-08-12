<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    static $names = [
        'Киану Ривз',
        'Жан Рено',
        'Натали Портман',
        'Бен Кингсли',
        'Стив Джобсов',
        'Вуди Аллен',
        'Винни Пух',
    ];

    public function run(): void
    {
        /*добавим админа */
        DB::table('users')->insert([
            'name' => 'Ваня Админов',
            'email' => 'ark@mail.ru',
            'password' => Hash::make(123),
            'is_admin' => true,
        ]);

        /* рандомные юзеры */
        foreach (self::$names as $name) {
            DB::table('users')->insert([
                'name' => $name,
                'email' => Str::random(5) . '@gmail.com',
                'password' => Hash::make('pass'),
                'is_admin' => false,
            ]);
        }
    }
}
