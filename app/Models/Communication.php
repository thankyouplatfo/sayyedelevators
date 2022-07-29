<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    use HasFactory;
    //
    protected $fillable = ['welcome_phrase', 'city_id', 'country_id', 'phone', 'email'];
    //
    public function country()
    {
        # code...
        return $this->belongsTo(Country::class, 'country_id');
    }
    //
    public function city()
    {
        # code...
        return $this->belongsTo(City::class, 'city_id');
    }
}
