<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    //
    public function permissions()
    {
        # code...
        return $this->belongsToMany(Permission::class, 'permission_role', 'role_id', 'permission_id', 'id', 'id');
    }
    //
    public function users()
    {
        # code...
        return $this->hasMany(User::class);
    }
}
