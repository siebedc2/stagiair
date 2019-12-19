<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $table = 'student_internship';

    public function students() 
    {
        return $this->belongsTo('\App\Student', 'student_id');
    }
}
