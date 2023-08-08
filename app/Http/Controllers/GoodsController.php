<?php

namespace App\Http\Controllers;

use App\Models\Good;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function loadPage()
    {
        $goods = Good::all('id', 'name', 'quantity');

        return view('pages.goods', compact('goods'));
    }
}
