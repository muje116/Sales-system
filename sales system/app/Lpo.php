<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lpo extends Model
{
    protected $fillable = ['sales_id', 'org_name', 'status','lpo_number'];

    public function sales(){
        return $this->belongsTo('App\Sales');
    }
    public function customer (){
        return $this->belongsTo('App\Customer');
    }
}
