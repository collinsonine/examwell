<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'question',
        'a',
        'b',
        'c',
        'd',
        'answer'
    ];

    public function Course(){
        $this->belongsTo(Courses::class, 'id');
    }
}
