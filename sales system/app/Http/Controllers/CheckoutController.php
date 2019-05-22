<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Cart;
use App\Product;
use App\Quatation;
use App\QuotationDetail;
class CheckoutController extends Controller
{
    public function index(){
        return view('public.quotations.preview');
    }

    public function back()
    {
      Cart::destroy();
      return view('public.quotations.index',['products' => Product::paginate(10)]);
    }
    public function details(){
        return view('public.quotations.customer');
    }
    public function cus(){
        return view('public.quotations.add');
    }
    public function print(){
        return view('public.quotations.qout_print');
    }
    public function quotation()
    {
      //  $quota = Quatation::findorfail();
        //dd($quota);
        return view('public.quotations.quotations')->with('customers', Customer::all())->with('quotations', Quatation::all())->with('products', Product::all());
    }

    public function quotation_view($id)
    {

       $quota = Quatation::findorfail($id);
        // dd(QuotationDetail::find(1)->product);

       //dd($quota->details);
        $name = ($quota->customer->customer_name);
          $date = ($quota->expire_date);
        return view('public.quotations.lists',['name'=> $name],['date'=> $date])->with('customers', Customer::all())->with('quotations', Quatation::all())->with('quota', $quota->details);
    }
}
