<?php

namespace App;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Supplier;
use App\Sales;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['prod_code', 'prod_name', 'description', 'price' , 'qty', 'tax', 'supplier_id', 'category_id'];
    public function category()
    {
      return $this->belongsTo('App\Category');
    }

    public function supplier()
{
  return $this->belongsTo('App\Supplier');
}

    public function sales()
    {
        return $this->belongsTo('App\Sales');
    }
    public function quatation()
    {
        return $this->belongsTo('App\Quatation');
    }
    public function quotationdetails()
    {
        return $this->belongsTo('App\QuotationDetail');
    }
    public function salesProduct(){
        return $this->belongsTo('App\SalesProduct');
    }
    public function cheque(){
        return $this->belongsTo('App\Cheque');
    }
    public function reorder(){
        $reorder = DB::table('products')->
        where('qty', '>', 'reorder') ->orderBy( 'prod_name')->paginate(10);
    }

}
