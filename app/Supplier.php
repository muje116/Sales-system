<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['supplier_name', 'address', 'contact', 'email'];

    public function products()
      {
        return $this->hasMany('App\Product');
      }
}
