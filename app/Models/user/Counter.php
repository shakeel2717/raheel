<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'department_id',
    ];


    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
