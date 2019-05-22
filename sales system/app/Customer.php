<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['customer_name','contact', 'address','email', 'company'];

    public function sales()
    {
        return $this->hasOne('App\Sales');
    }
    public function quatation()
    {
        return $this->hasOne('App\Quatation');
    }
    public function quotationdetails()
    {
        return $this->hasOne('App\QuotationsDetail');
    }
    public function lpo(){
        return $this->hasOne('App\Lpo');
    }

    public function credit(){
        return $this->hasOne('App\Credit');
    }

}
