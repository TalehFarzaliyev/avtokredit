<?php

/**
 * Rauf Abbas
 * rafo.abbas@gmail.com
 */

namespace App\Models;

use App\Enable;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use Enable;

    protected $fillable = [
        'title',
        'code',
        'symbol_left',
        'symbol_right',
        'decimal_places',
        'value',
        'status',
    ];
}
