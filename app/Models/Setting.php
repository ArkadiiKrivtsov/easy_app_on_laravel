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

    public static function updateSettings($data)
    {
        $settings = Setting::query()->first();

        return $settings->update([
            'access_token' => $data['access_token'],
            'is_transfer_balances' => isset($data['is_transfer_balances']),
            'is_transfer_prices' => isset($data['is_transfer_prices']),
        ]);
    }
}
