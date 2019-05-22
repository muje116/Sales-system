<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Quatation;
use Illuminate\Http\Request;
use App\Product;
use Cart;
use Session;
use App\Company;
use App\QuotationDetail;
use Illuminate\Support\Facades\DB;

class QuotationsController extends Controller
{
    public function index()
    {
      return view('public.quotations.index',['products' => Product::paginate(10)]);
    }
    public function add_to_cart(){


        $pdt = Product::find(request()->pdt_id);
        $cartItem= Cart::add([
            'id' =>$pdt->id,
            'prod_code' => $pdt->prod_code,
            'prod_name' => $pdt->prod_name,
            'qty' => request()->qty,
            'price' => $pdt->price
        ]);

        Cart::associate($cartItem->rowId, 'App\Product');

        return redirect()->route('quotations');
    }

    public function cart()
    {
        if (cart::content()->count() == 0)
        {
            Session::flash('info', 'You do not have any products in your cart');
            return redirect()->back();
        }
    $customers = Customer::paginate(10);

        return view('public.quotations.caaa',['customers'=>$customers]);
    }

    public function cart_delete($id)
    {
        Cart::remove($id);
        Session::flash('success', 'product deleted from cart');
        return redirect()->back();
    }

    public function incr($id, $qty)
    {
        Cart::update($id, $qty + 1);
        Session::flash('success', 'product quantity increased');
        return redirect()->back();
    }

    public function decr($id, $qty)
    {
        Cart::update($id, $qty - 1);
        Session::flash('success', 'product  quantity decreased');
        return redirect()->back();
    }

    public function rapid_add($id)
    {
        $pdt = Product::find($id);

        $cartItem= Cart::add([
            'id' =>$pdt->id,
            'prod_code' => $pdt->prod_code,
            'prod_name' => $pdt->prod_name,
            'qty' => 1,
            'price' => $pdt->price
        ]);

        Cart::associate($cartItem->rowId, 'App\Product');
        Session::flash('success', 'product added');
        return redirect()->route('quotations');
    }
    public function preview(){

        //$customer= Customer::find($id);
        return view('public.quotations.checkout');//->with('customer', Customer::all()); //,['customers'=>$customer]
    }

    public function record(Request $request)
    {
        $this->validate($request, [
            'customer_id' => 'required',
            'expire_date' => 'required'
            ]);
            //cart::destroy();
        $request->session()->keep([$request->customer_id, $request->name]);
        $data = $request->session()->all();


          $quatation=Quatation::create([

            'expire_date' => $request->expire_date,
            //'user_id' => $request->user_id,
            'customer_id' => $request->customer_id
        ]);
        foreach (Cart::content() as $cart)


        $detail= QuotationDetail::create([
          'product_id' => $cart->id,
          'quatation_id' => $quatation->id,
          //'price' =>$cart->price,
          'qty' =>$cart->qty,
        ]);


        Session::flash('success', 'Quotation Created successfully ');
        $cus = DB::table('customers')
            ->where('id', '=',$quatation->customer_id )
            ->get();
      /*  $det = DB::table('products')
            ->where('id', '=',$detail->product_id )
            ->get();*/
       $det= QuotationDetail::find($quatation->id);
        $expire= $request->expire_date;
          //dd($det);
        return view('public.quotations.checkout',['expire' => $expire], ['customers' => $cus])->with('company', Company::all())->with('products', $det);


    }
}
