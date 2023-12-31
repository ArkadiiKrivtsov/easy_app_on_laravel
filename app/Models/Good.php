<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;

class Good extends Model
{
    use HasFactory;

    public function stocks(): BelongsToMany
    {
        return $this->belongsToMany(Stock::class);
    }

}
