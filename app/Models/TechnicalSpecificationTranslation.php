<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechnicalSpecificationTranslation extends Model
{
	protected $table = "tech_spech_translations";
    public $timestamps = false;

    protected $fillable = ['name'];
}
