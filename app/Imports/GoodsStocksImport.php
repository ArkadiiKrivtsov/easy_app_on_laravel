<?php

namespace App\Imports;

use App\Models\Good;
use App\Models\Stock;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use function Laravel\Prompts\error;

class GoodsStocksImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        for ($i = 1; $i < count($rows); $i++) {
            $good_code = $rows[$i][0];
            $stock_code = $rows[$i][1];
            $good_quantity = $rows[$i][2];
            $good = Good::all()->where('code', '=', $good_code);
            $stock = Stock::all()->where('code', '=', $stock_code);

            $j = 0;
            while ($j != $good_quantity) {
                DB::table('good_stock')
                    ->insert([
                        'good_id' => $good->first()->id,
                        'stock_id' => $stock->first()->id,
                    ]);
                $j++;
            }
        }
    }
}
