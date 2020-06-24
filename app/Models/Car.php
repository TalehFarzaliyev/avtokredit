<?php

namespace App\Models;

use App\Enable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;

class Car extends Model
{
    use SoftDeletes, Enable;

    protected $dispatchesEvents = [
        'created' => \App\Events\AutoSaving::class,
    ];


    protected $fillable = [
        'car_brand_id',
        'car_model_id',
        'body_type_id',
        'color_id',
        'fuel_type_id',
        'fuel_usage',
        'transmission_id',
        'gear_id',
        'currency_id',
        'company_id',
        'city_id',
        'mileage',
        'price',
        'power',
        'description',
        'technical_specification_id',
        'phone',
        'year',
        'name',
        'status',
        'type',
        'visit',
        'credit',
        'credit_period',
        'credit_initial_amount',
        'credit_monthly_amount',
        'deposit',
        'deposit_period',
        'deposit_amount',
        'deposit_daily_pay',
        'email',
        'barter',
        'engine_volume',
        'pin_code'
    ];

    protected $casts = [
        'technical_specification_id' => 'array'
    ];

    public function car_brand()
    {
        return $this->hasOne(CarBrand::class,'id', 'car_brand_id');
    }

    public function car_model()
    {
        return $this->hasOne(CarModel::class,'id', 'car_model_id');
    }

    public function body_type()
    {
        return $this->hasOne(BodyType::class,'id', 'body_type_id');
    }

    public function color()
    {
        return $this->hasOne(Color::class,'id', 'color_id');
    }

    public function company()
    {
        return $this->hasOne(Company::class,'id', 'company_id');
    }

    public function city()
    {
        return $this->hasOne(City::class,'id', 'city_id');
    }


    public function transmission()
    {
        return $this->hasOne(Transmission::class,'id', 'transmission_id');
    }

    public function gear()
    {
        return $this->hasOne(Gear::class,'id', 'gear_id');
    }

    public function fuel_type()
    {
        return $this->hasOne(FuelType::class,'id', 'fuel_type_id');
    }

    public function currency()
    {
        return $this->hasOne(Currency::class,'id', 'currency_id');
    }

    public function technical_specification(){
        return TechnicalSpecification::whereIn('id',$this->technical_specification_id)->get();
    }

    public function images(){
        return $this->hasMany(CarImage::class);
    }

    protected $appends = ['main', 'thumbnail', 'thumbnail_url', 'thumbnails'];

    public function getMainAttribute()
    {
        $image = CarImage::where('car_id', $this->id)->first();
        $image = $image ? asset('uploads/thumbs/'.$image->image) : '';
        return $image;
    }

    public function getThumbnailAttribute()
    {
        $image = CarImage::where('car_id', $this->id)->first();
        $image = $image ? asset('uploads/thumbs/'.$image->image) : '';
        return $image;
    }

    public function getThumbnailUrlAttribute()
    {
        $image = CarImage::where('car_id', $this->id)->first();
        $image = $image ? asset('uploads/'.$image->image) : '';
        return $image;
    }

    public function getThumbnailsAttribute()
    {
        $thumbnails = [];
        $images = CarImage::where('car_id', $this->id)->get();
        if(!$images->isEmpty()) {
            foreach($images as $image) {
                $thumbnails[] = [
                    'thumb'     => asset('uploads/thumbs/'.$image->image),
                    'full'      => asset('uploads/'.$image->image)
                ];
            }
        }
        return $thumbnails;
    }
}

