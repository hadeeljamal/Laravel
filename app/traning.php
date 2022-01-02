<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class traning extends Model
{
    protected $table='traning' ;
    protected $fillable=['name','courses','admissionFee','courseFee','currency','numberOfPayment','student_id'] ;


    public function student()
    {
        return $this->belongsTo('App\Student','student_id');
    }
    public function payment()
    {
        return $this->hasMany('App\payment');
    }


}
