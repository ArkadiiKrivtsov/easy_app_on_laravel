<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function loadPage()
    {
        $settings = Setting::query()->first();

        return view('pages.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        //dd($request['is_transfer_prices']);
        if (Setting::updateSettings($request->all())) {
            return redirect()->route('settings')->with('message', 'Настройки успешно обновлены');
        }

        return redirect()->back()->withErrors('message','Ошибка обновления настроек!');
    }
}
