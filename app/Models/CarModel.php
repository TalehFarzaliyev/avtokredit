<?php

namespace App\Models;

use App\Enable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarModel extends Model
{
    use SoftDeletes, Enable;


    protected $fillable = [
        'name',
        'status',
    ];

    public function car_brand()
    {
        return $this->hasOne(CarBrand::class,'id', 'car_brand_id');
    }
}
