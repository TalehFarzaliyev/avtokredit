<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'address',
        'working_days',
        'slogan',
        'description'
    ];
}
