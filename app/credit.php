<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class credit extends Model
{
    protected $fillable = ['sales_id', 'due_date', 'customer_id', 'status'];

    public function sales(){
       return $this->belongsTo('App\Sales');
    }
    public function customer(){
        return $this->hasOne('App\Customer');
    }
}
