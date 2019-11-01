<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function internships() 
    {
        // $company->internships()
        return $this->hasMany('\App\Internship');
    }
}
