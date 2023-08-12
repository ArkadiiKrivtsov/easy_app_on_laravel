<?php

namespace Database\Seeders;

use App\Models\Good;
use App\Models\Stock;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodStockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $goods_count = count(Good::all()->toArray());
        $stocks_count = count(Stock::all()->toArray());
        $i = 0;

        while ($i < 100) {
            DB::table('good_stock')
                ->insert([
                    'good_id' => rand(1, $goods_count),
                    'stock_id' => rand(1, $stocks_count),
                ]);
            $i++;
        }
    }
}
