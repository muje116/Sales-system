<?php

namespace App\Http\Controllers;
use App\Product;
Use App\Category;
use App\SalesProduct;
use App\Supplier;
use App\Lpo;
Use Cart;
use Illuminate\Http\Request;
use App\Customer;
use App\Sales;
use App\company;
use Illuminate\Support\Facades\DB;
use Hamcrest\Core\HasToString;
use App\Credit;
class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $count = Product::whereColumn('products.reorder', '>=', 'qty')->orderBy('prod_name')->count();
      $credit = Credit::all()->count();
      $total = Sales::sum('amount');
      $sales = Sales::all()->count();
        return view('admin.reports.index',['total' => $total],['reorder'=>$count])->with('credit', $credit)->with('sale', $sales)->with('sales', Sales::all())->with('company', Company::all());
    }
    public function receivables (){
        $sales = Sales::all();
        $rece = Customer::all();
        $credit = Credit::all();
        $shop = Company::all();
        //dd($credit);
        return view('admin.reports.receivables',['credit'=> $credit])->with('sales' , $sales)->with('customers', $rece)->with('company',$shop);//dd($shop);


    }

    public function update(Request $request,$id)
    {
      $credit = Credit::find($id);
      //Credit::update('status')->where('id'=>$credit);
      $update = Credit::where('id', $credit)->update(['status' =>$request]);
      return redirect()->back();

    }
    public function inventory(){
        return view('admin.reports.inventory')->with('company', Company::all())->with('suppliers', Supplier::all())->with('products', Product::all());
    }
    public function overall(){
        return view('admin.reports.overall')->with('company', Company::all())->with('sales', Sales::all())->with('company', Company::all());
    }
    public function display(){
        $month2 ='month2';
        $month = 'month';
        $sales = DB::table('sales')
            ->whereBetween('created_at', [$month, $month2])
            ->get();
        return view('admin.reports.overall')->with('company', Company::all())->with('sales', Sales::all());
    }

    public function chart(){

        return view('admin.reports.charts')->with('products', Product::all());;
    }
    public function all_sales(){
        return view('public.reports.all_sales')->with('sales', Sales::all());
    }
    //viewing sales details
    public function view_sales($sales_id){
      //dd($id);
        $customer = Sales::Find($sales_id);
        $cus = ($customer->product);
        $sales=SalesProduct::where('sales_id',$sales_id)->get();
       $data =($sales);
       //dd($sales);
        return view('public.reports.view.sales',['cus'=> $cus])->with('customer',$customer)->with('sales' , $data );//->with('products', Product::all());
    }
    //viewing lpo
    public function lpo(){
        $lpo= Lpo::all();
        $sales = Sales::all();
        //dd($lpo);
        return view('public.reports.lpo',['lpo' => $lpo], ['sales' => $sales])->with('customers',Customer::all());
    }
    //viewing cheque
    public function view_cheque($id){
//dd($id);
        $customer = Sales::Find($id);
        $cus = ($customer->product);
        $sales=SalesProduct::where('sales_id',$id)->get();
        //$test = SalesProduct::all();
        $table = DB::table('Sales_products')->select('product_id')->where('sales_id', '=',$id)->get();
        //$sales=SalesProduct::findorFail($customer == $test->sales_id);
        //dd($table);

        //$data =($sales->product);
      //  dd($data);
        return view('public.reports.view_cheque',['cus'=> $cus],['table'=> $table])->with('customer',$customer)->with('sales', $sales);//->with('products', Product::all());
    }

    /*
    //viewing credit customers
    public function credit(){
        $lpo= Credit::all();
        $sales = Sales::all();

        return view('public.customer.index',['lpo' => $lpo], ['sales' => $sales])->with('customers',Customer::all());
    }*/


}
