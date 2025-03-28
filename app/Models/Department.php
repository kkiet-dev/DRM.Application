<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';
    
    protected $fillable = [
        'name' 
    ];

    public function procesingInfor()
    {
        return $this->hasMany(Procesing::class, 'depament_id', 'id');
    }
}
