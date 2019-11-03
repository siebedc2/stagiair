<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    public function company()
    {
        // Relations, een company heeft meerdere internships maar een internship behoort maar toe aan 1 company
        return $this->belongsTo('\App\Company');
    }
}
