<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\Stock;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function index()
    {
        $goods = Good::all('id', 'name', 'code');
        $stocks = Stock::all('id', 'name');

        return view('pages.goods', compact('goods', 'stocks'));
    }

    public function selectStock(Request $request)
    {
        $stock_id = $request->get('stocks_id');

        if ($stock_id) {
            return redirect()->route('selected_stock', $stock_id);
        } else {
            return redirect()->route('goods');
        }

    }

    public function loadStocks($stock_id)
    {
        $goods = Good::all('id', 'name', 'code');
        $stocks = Stock::all('id', 'name');

        return view('pages.goods', compact('goods', 'stocks', 'stock_id'));
    }
}
