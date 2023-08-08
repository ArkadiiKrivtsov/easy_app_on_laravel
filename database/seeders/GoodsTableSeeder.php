<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    static $goods = [
        'Клавиатура',
        'Учебник PHP',
        'Мышь',
        'Коврик',
        'Игры угадай мем',
        'Компьютер мощщщный',
        'Ручка',
        'Карандаш',
    ];

    public function run(): void
    {
        foreach (self::$goods as $item) {
            DB::table('goods')->insert([
                'name' => $item,
                'quantity' => rand(1,100)
            ]);
        }
    }
}
