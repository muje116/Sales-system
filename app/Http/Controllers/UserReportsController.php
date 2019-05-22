<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Lpo;
use App\Sales;
use App\SalesProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Supplier;
use App\Credit;
class UserReportsController extends Controller
{
    public function index(){
        return view('public.reports.index');
    }
    public function sales(){
        return view('public.reports.sales')->with('sales',Sales::all());
        }
     public function salo_date(){
        return view('public.reports.salo');
     }
    public function sales_display(){
        $date=$_POST['date'];

        $date=explode('-',$date);
        $start=date("Y-m-d",strtotime($date[0]));
        $end=date("Y-m-d",strtotime($date[1]));
        $sales = Sales::whereBetween('created_at', [$start, $end]) ->latest()
            ->get();

        return view('public.reports.timely_sale', ['sales' => $sales])->with('products',Product::all());

    }
    public function income(){
        return view('public.reports.income');
        }
        //viewing income
    public function income_display(){
        $sales = Sales::all();
        $product = Product::all();
        return view('public.reports.income');
    }
    //viewing receivables
     public function receivables (){
         $sales = Sales::all();
         $rece = Customer::all();
         $credit = Credit::all();
         return view('public.reports.receivables',['credit'=> $credit])->with('sales' , $sales)->with('customers', $rece);
     }
     //all credit customers reports
    public function receive_display (){
        $date=$_POST['date'];

        $date=explode('-',$date);
        $start=date("Y-m-d",strtotime($date[0]));
        $end=date("Y-m-d",strtotime($date[1]));
        $credits = Credit::whereBetween('created_at', [$start, $end]) ->latest()
            ->get();

        return view('public.reports.receivables',['credit' => $credits]);
    }
    public function inventory (){
        return view('public.reports.invent');
    }
    public function inventories (){
        return view('public.reports.inventory')->with('products', Product::all());
    }
    //timely reports for inventory
    public function inventory_display (){
        $date=$_POST['date'];

        $date=explode('-',$date);
        $start=date("Y-m-d",strtotime($date[0]));
        $end=date("Y-m-d",strtotime($date[1]));
    $inventory = DB::table('products')
        ->whereBetween('created_at', [$start, $end]) ->latest()
        ->get();

        return view('public.reports.inventory',['products' => $inventory])->with('supplier', Supplier::all());
    }
    // timely reports for lpo sales
    public function lpo_timely(){
        $date=$_POST['date'];

        $date=explode('-',$date);
        $start=date("Y-m-d",strtotime($date[0]));
        $end=date("Y-m-d",strtotime($date[1]));
        $lpo = Lpo::whereBetween('created_at', [$start, $end]) ->latest()
            ->get();
        return view('public.reports.lpo',['lpo' => $lpo])->with('customers', Customer::all());

    }
    public function lpo_view($id){
        //dd($id);
        $customer = Sales::Find($id);
        $cus = ($customer->product);
        $sales=SalesProduct::where('sales_id',$id)->get();
      //  dd($sales);
//        dd($cus);
        return view('public.reports.view.lpo',['cus'=> $cus])->with('customer',$customer)->with('sales', $sales);//->with('products', Product::all());

    }
    //timely reports for cheque sales
    public function cheque_timely(){
        $date=$_POST['date'];

        $date=explode('-',$date);
        $start=date("Y-m-d",strtotime($date[0]));
        $end=date("Y-m-d",strtotime($date[1]));
        $cheque = Lpo::whereBetween('created_at', [$start, $end]) ->latest()
            ->get();
        return view('public.reports.inventory',['cheque' => $cheque])->with('customers', Customer::all());

    }

    //timely reports for credit sales

  /*  public function credit_timely(){
        $date=$_POST['date'];

        $date=explode('-',$date);
        $start=date("Y-m-d",strtotime($date[0]));
        $end=date("Y-m-d",strtotime($date[1]));
        $cheque = Lpo::whereBetween('created_at', [$start, $end]) ->latest()
            ->get();
        return view('public.customers.report',['cheque' => $cheque])->with('customers', Customer::all());

    }
*/



}
