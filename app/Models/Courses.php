<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'status'
    ];

    public function Question(){
        $this->hasMany(Questions::class, 'course_id');
    }
}
