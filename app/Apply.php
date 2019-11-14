<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    public function internship()
    {
        // Relations, een sollicitatie behoort maar toe aan 1 stage
        return $this->belongsTo('\App\Internship');
    }

    public function student()
    {
        // Relations, een sollicitatie behoort maar toe aan 1 student
        return $this->belongsTo('\App\Student');
    }
}
