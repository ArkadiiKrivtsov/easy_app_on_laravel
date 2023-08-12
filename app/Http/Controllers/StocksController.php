<?php

namespace App\Http\Controllers;

use App\Imports\GoodsStocksImport;
use App\Models\Stock;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;
use Maatwebsite\Excel\Facades\Excel;

class StocksController extends Controller
{
    public function index()
    {
        $stocks = Stock::all('id', 'name', 'code');

        return view('pages.stocks', compact('stocks'));
    }

    public function upload(Request $request)
    {
        ini_set('memory_limit', '-1');
        // загрузка файла
        try {
            if ($request->isMethod('post') && $request->file('userfile')) {

                Excel::import(new GoodsStocksImport(), $request->file('userfile'));
            }

            return redirect()->route('stocks')->with(['message' => 'Успешно добавлено. Данные обновятся автоматически']);

        } catch (\Throwable $e) {
            return redirect()->route('stocks')->withErrors(['message' => 'Ошибка обновления данных']);
        }
    }
}
