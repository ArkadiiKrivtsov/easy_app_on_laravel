<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'access_token',
        'is_transfer_balances',
        'is_transfer_prices',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
//    protected $casts = [
//        'access_token' => 'string',
//        'is_transfer_balances' => 'boolean',
//        'is_transfer_prices' => 'boolean',
//    ];

    public static function updateSettings($request)
    {
        $settings = Setting::query()->first();

        return $settings->update([
            'access_token' => $request['access_token'],
            'is_transfer_balances' => isset($request['is_transfer_balances']),
            'is_transfer_prices' => isset($request['is_transfer_prices']),
        ]);
    }
}
