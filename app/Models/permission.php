<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    use HasFactory;
    //
    protected $fillable = ['name','desc'];
    //
    public function roles()
    {
        # code...
        return $this->belongsToMany(Role::class,'permission_role','role_id','permission_id','id','id');
    }
}
