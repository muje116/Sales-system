<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable = ['comp_number', 'address', 'contact', 'name'];
}
