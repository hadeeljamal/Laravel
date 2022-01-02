<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\App;

class Student extends Model
{
    protected $table='student' ;
    protected $fillable=['studentEnglish','studentArabic','idNumber','birthDay',
    'phoneNumber','alternateNumber','alternateName','email','address','city',
    'qualification','specialization','currentJob','workPlace'] ;

    // public function tranings()
    // {
    //     return $this->hasMany(traning::class);
    // }
    public function tranings()
    {
        return $this->hasMany('App\traning');
    }
}
