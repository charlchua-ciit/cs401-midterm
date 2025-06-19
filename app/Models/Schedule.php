<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    //
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
