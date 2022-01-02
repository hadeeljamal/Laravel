<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table='payment' ;
    protected $fillable=['traning_id','namepayment','paymentDate1','paymentValue1','paymentDate2','paymentValue2',
    'paymentDate3','paymentValue3','paymentDate4','paymentValue4'] ;

    public function traning()
    {
        return $this->belongsTo('App\traning','traning_id');
    }
}
