<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cheque extends Model
{
    protected $fillable = ['bank', 'sales_id', 'number','status'];

    public function sales(){
        return $this->belongsTo('App\Sales');
    }
    public function customer(){
        return $this->hasMany('App\Customer');
    }
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
