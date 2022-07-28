<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    //
    protected $fillable = ['welcome_phrase', 'city_id', 'country_id', 'mobile_number','e_mail'];
    //
    public function Country()
    {
        # code...
        return $this->belongsTo(Country::class,'country_id');
    }
    //
    public function City()
    {
        # code...
        return $this->belongsTo(City::class,'city_id');
    }
    
}
