<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeProject extends Model
{
    use HasFactory;
    protected $fillable = ['path','alt'];
}
