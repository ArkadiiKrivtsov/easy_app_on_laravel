<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::query()->first();

        return view('pages.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        if (Setting::updateSettings($data)) {
            return redirect()->route('settings')->with('message', 'Настройки успешно обновлены');
        }

        return redirect()->back()->withErrors('message', 'Ошибка обновления настроек!');
    }
}
