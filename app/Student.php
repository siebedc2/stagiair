<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use Notifiable;

    protected $guard = 'student';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function internships()
    {
        // ManyToMany relatie
        return $this->belongsToMany('\App\Internship', 'student_internship', 'student_id', 'internship_id');
    }

    public function reviews()
    {
        // ManyToMany relatie
        return $this->belongsToMany('\App\Review');
    }

    public function applies()
    {
        // ManyToMany relatie
        return $this->belongsToMany('\App\Apply');
    }
}
