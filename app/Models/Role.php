<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'name',
    ];
    
    // public function users():HasMany
    // {
    //     return $this->hasMany(User::class, 'role_id');
    // }

    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }

}
