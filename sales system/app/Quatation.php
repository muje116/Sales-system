<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quatation extends Model
{
    protected $fillable =['customer_id', 'expire_date'];//'user_id'prod_code',',

    public function user()
    {
        return $this->hasOne('App\User');
    }
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
    public function products()
    {
        return $this->hasMany('App\Product');
    }
    public function details()
    {
        return $this->hasMany('App\QuotationDetail');
    }

}
