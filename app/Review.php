<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function companies() 
    {
        return $this->belongsTo('\App\Company', 'company_id');
    }

    public function students() 
    {
        return $this->belongsTo('\App\Student', 'student_id');
    }

}
