<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesProduct extends Model
{
    protected $fillable = ['sales_id', 'product_id','price','qty'];
    public function sales(){
        return $this->belongsTo('App\Sales');
    }
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
