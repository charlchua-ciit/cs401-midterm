<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    //
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class,'class_student');
    }
}
