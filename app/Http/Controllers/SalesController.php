<?php

namespace App\Http\Controllers;
use App\Product;
use App\SalesProduct;
use Illuminate\Http\Request;
use App\Sales;
use Cart;
use App\Lpo;
use App\Customer;
use App\Credit;
use App\Cheque;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Company;
//use Gloudemans\Shoppingcart\Cart;
class SalesController extends Controller
{
    public function index(Request $request, $id)
    {
        $customer = Customer::find($id);

      return view('public.sales.index',['products' => Product::paginate(10)],['customer' => $customer]);
    }

    public function rapid_add($id)
    {

        $customer = Customer::find($id);

        return view('public.sales.index',['products' => Product::paginate(10)],['customer' => $customer]);

    }
    public function pay (){
        return view('public.sales.pay');
    }
    public function stores(Request $request){

        $this->validate($request,[
            'payment_type' => 'required',
            'customer_id' => 'required'
        ]);

        $cus = Customer::find($request->customer_id);
            //dd($cus);

       $total= Cart::total();
           $sales = Sales::create([
               // 'product_id' => $cart->id,
                'customer_id' =>$request->customer_id,
              //  'qty' =>$cart->qty,
                'payment_type' => $request->payment_type,
              'amount' =>$total,
              //  'user_id' => $request->user_id,
            ]);
        foreach (Cart::content() as $cart)
        $salesDetail= SalesProduct::create([
            'sales_id' => $sales->id,
             'product_id' => $cart->id,
              'qty' =>$cart->qty,
             'price' =>$cart->price,
        ]);
            $status = 'not paid';
            if ($request->payment_type == 'lpo'){
            Lpo::create([
                'sales_id' => $sales->id,
              'lpo_number' => $request->lpo_number,
              'org_name' => $request->organisation,
                'status' => $status,
            ]);
            }
        elseif ($request->payment_type == 'credit'){
            Credit::create([
                'sales_id' => $sales->id,
              'customer_id' => $sales->customer_id,
              'due_date' => $request->due_date,
                'status' => $status,
            ]);}
            elseif ($request->payment_type == 'cheque'){
            Cheque::create([
                'sales_id' => $sales->id,
                'bank' => $request->bank,
                'status' => 'not cashed',
                'number' =>$request->cheque_number,
            ]);}
            else ($request->payment_type == 'cash'){
            Cheque::create([
                'sales_id' => $sales->id,
                'amount' =>$request->amount,
              ])
            };
//            $product = Product::find($salesDetail->product_id);
           // dd($product);
         /*   $remain =$cart->qty - $product->qty;
        DB::table('products')
            ->where('id', $salesDetail->product_id)
            ->update(['qty' => $remain]);*/
        $pro = Product::find($salesDetail->product_id);
        $remain = $pro->qty - $cart->qty;
        $update = Product::where('id', $salesDetail->product_id)->update(['qty' =>$remain]);

        //dd($sales);
        Session::flash('success', 'Sales Recorded successfully ');
    //dd($cus);
            return view('public/sales/print',['customers' => $cus], ['company' => Company::all()]);

    }
    public function back_to_sale(){
        Cart::destroy();
        $customer = Customer::all();
        return view('public.sales.sales_customer',['customers' => $customer], ['company' => Company::all()]);

    }
    public function credit(){
        $credit= Credit::all();
        return view('public.reports.credit',['id' => $credit])->with('customers',Customer::all());
    }

    public function cheque(){
        $cheque = Cheque::all();
        //dd($cheque);
        $sales = Sales::all();
        //($sales);
        return view('public.reports.cheque',['cheque' => $cheque], ['sales' => $sales]);
    }
    public function cash(){
        $cash = DB::table('sales')
            ->where('payment_type','=', 'cash')
            ->get();
        return view('public.reports.cash',['cash' => $cash]);
    }
    public function saleProducts($id){
        $customer = Customer::find($id);
        return view('public.sales.lists',['products' => Product::paginate(10)],['customer' => $customer]);
    }
    public function store(Request $request)
    {
        $pdts = Product::findorfail($request->prod_code);// ->count() == null
//      $pdts = Product::where('prod_code',$request->prod_code)->get();// ->count() == null

//dd($pdts);
      //is_null($pdts)
     if (is_null($pdts)){
          Session::flash('error', 'that product is not in stock');
      return redirect()->back();
      }
      elseif ($pdts->qty < $pdts->reorder){
         Session::flash('info', 'that product is understocked');
      }
      else {
         // dd($pdts);
          //adding to cart the product which has been found
          $cartItem = Cart::add([
              'id' => $pdts->id,
              'prod_name' => $pdts->prod_name,
              'prod_code' => $pdts->prod_code,
              'qty' => $request->quantity,
              'price' => $pdts->price
          ]);


          Cart::associate($cartItem->rowId, 'App\Product');
          Session::flash('success', 'Added');
          return redirect()->back();
      }
    }
    public function sales_add(Request $request)
    {
        dd($request);
        $pdts = Product::find($request->prod_code);// ->count() == null
    $pdt = $pdts->product;
  //dd($pdt->prod_name);
       /* if (!$pdts){
            Session::flash('info', 'that product is not in stock');
        return redirect()->back();
        }
        else {--}}*/
            //adding to cart the product which has been found
            $cartItem = Cart::add([
                'id' => $pdt->id,
                'prod_name' => $pdt->prod_name,
                'prod_code' => $pdt->prod_code,
                'qty' => $request->quantity,
                'price' => $pdt->price
            ]);


            Cart::associate($cartItem->rowId, 'App\Product');
            Session::flash('success', 'Added');
            return redirect()->back();

    }
    //functions for the modals

    public function customer(){
        return view('public.sales.add');
    }

    public function rapid_sales($id)
    {
        $pdt = Product::find($id);

        $cartItem= Cart::add([
            'id' =>$pdt->id,
            'prod_name' => $pdt->prod_name,
            'qty' => 1,
            'price' => $pdt->price,
             'prod_code' => $pdt->prod_code,
        ]);

        Cart::associate($cartItem->rowId, 'App\Product');
        Session::flash('success', 'product added to sales list');
        return redirect()->back();
    }
}
/*
        $pdts = DB::table('products')
            ->where('prod_code', '=',$pdt )
            ->get();
       /* $pdts = DB::table('products')
            ->where([
                ['id', '=', $pdt],
                ['prod_code', '=', $request->prod_code]
            ])->get();
        */  /*
                $pdts = DB::table('products')
            ->where('id', '=', $pdt)
            ->where(function ($query) {
                $query->where('prod_code', '=', $request)
                    ->orWhere('title', '=', 'Admin');
            })*/
