<?php

namespace App\Models;

use App\Enable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarBrand extends Model
{
    use SoftDeletes, Enable;


    protected $fillable = [
        'name',
        'status',
    ];

}
