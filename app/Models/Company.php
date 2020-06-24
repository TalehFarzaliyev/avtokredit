<?php

namespace App\Models;

use App\Enable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable implements TranslatableContract
{
    use Translatable, SoftDeletes, Enable;


    protected $fillable = [
    	'name',
    	'location',
    	'image',
    	'cover_image',
    	'email',
    	'password',
    	'status',
    	'phone',
    	'visit',
        'company_group_id'
    ];

    public $translatedAttributes = [
        'working_days',
        'address',
    	'slogan',
    	'description'
    ];

    public $translationModel = 'App\Models\CompanyTranslation';

    public function autos()
    {
        return $this->hasMany(Car::class,'company_id', 'id');
    }
}
