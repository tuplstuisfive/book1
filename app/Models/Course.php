<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
