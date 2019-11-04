<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function internship() 
    {
        return $this->belongsTo('\App\Internship');
    }
}
