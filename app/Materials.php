<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    protected $fillable = ['course_id', 'book', 'slide', 'pasco'];

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }
}
