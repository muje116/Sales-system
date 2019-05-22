<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable= ['product_id','customer_id','qty','amount','payment_type' ];

    public function product()
    {
        return $this->hasManyThrough('App\Product', 'App\SalesProduct','product_id', 'id');
    }
    public function pro(){
        return $this->belongsTo('App\Product');
    }
    public function customer (){
        return $this->belongsTo('App\Customer');
    }
    public function lpo(){
        return $this->belongTo('App\Lpo');
    }
    public function credit(){
        return $this->hasOne('App\Credit');
    }
    public function cheque(){
        return $this->hasOne('App\Cheque');
    }
    public function SalesProducts(){
        return $this->hasMany('App\SalesProduct');
    }
    public function malo(){
         return $this->hasManyThrough('App\Product', 'App\SalesProduct');
     }



}
