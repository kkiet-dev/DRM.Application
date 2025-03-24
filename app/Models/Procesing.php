<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procesing extends Model
{
    protected $table = 'procesing';
    
    protected $fillable = [
        'name',
        'email',
        'file_path',
        'message',
        'status',
        'department_id',
        'user_id'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
