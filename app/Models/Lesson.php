<?php

namespace App\Models;

use Database\Seeders\CourseSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /** @use HasFactory<\Database\Factories\LessonFactory> */
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class,'registration');
    }

    public function teacher()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function course()
    {
        return $this->belongsToMany(Course::class);
    }

    public function season()
    {
        return $this->belongsToMany(Season::class);
    }

    public function location()
    {
        return $this->belongsToMany(Location::class);
    }


}
