<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    use HasFactory;
    //
    protected $table = 'communications';
    //
    protected $fillable = ['welcome', 'city_id', 'country_id', 'url', 'phone', 'email'];
    //
    public function city()
    {
        # code...
        return $this->belongsTo(City::class, 'city_id');
    }
    //
    public function country()
    {
        # code...
        return $this->belongsTo(Country::class, 'country_id');
    }
}
