<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuotationDetail extends Model
{
    protected $fillable = ['quatation_id', 'qty','product_id'];


      public function quatation()
      {
        return $this->belongsTo('App\Quatation');
      }

      public function product()
      {
        return $this->belongsTo('App\Product');
      }

      public function customer()
      {
        return $this->belongsTo('App\Customer');
      }

}
