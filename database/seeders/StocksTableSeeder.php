<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    static $stocks = [
        'Коледино',
        'Подольск',
        'Пушкино',
        'Внуково',
        'Домодедово',
    ];

    public function run(): void
    {
        foreach (self::$stocks as $stock) {
            DB::table('stocks')->insert([
                'code' => rand(10000, 99999),
                'name' => $stock,
            ]);
        }
    }
}
