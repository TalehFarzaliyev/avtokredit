<?php

namespace App\Models;

use App\Enable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FuelType extends Model implements TranslatableContract
{
    use Translatable, SoftDeletes, Enable;

    protected $fillable = ['status'];

    public $translatedAttributes = ['name'];

    public $translationModel = 'App\Models\FuelTypeTranslation';
}
