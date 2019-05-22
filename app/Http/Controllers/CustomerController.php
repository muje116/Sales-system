<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Quatation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Cart;
use App\Sales;
use App\Credit;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sales::all();
        $rece = Customer::all();
        $credit = Credit::paginate(10);
        return view('public.customers.index',['customers'=> $credit])->with('sales' , $sales)->with('customer', $rece);
    }
    public function admin_index()
    {
        return view('admin.customers.index')->with('customers', Customer::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_name' => 'required',
            'company' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'email' => 'required|email'
        ]);

    $customers = Customer::create([
        'customer_name' => $request->customer_name,
        'company' => $request->company,
        'contact' => $request->contact,
        'email' => $request->email,
        'address' => $request->address
    ]);


    Session::flash('success', 'customer added successfully');

    return redirect()->route('customer_list');

    }
    public function admin_store(Request $request)
    {
        $this->validate($request, [
            'customer_name' => 'required',
            'company' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'email' => 'required|email'
        ]);

        $customers = Customer::create([
            'customer_name' => $request->customer_name,
            'company' => $request->company,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address
        ]);


        Session::flash('success', 'customer added successfully');

        return redirect()->route('admin_index');

    }
    public function quick(Request $request)
    {
        $this->validate($request, [
            'customer_name' => 'required',
            'company' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'email' => 'required|email'
        ]);

    $customers = Customer::create([
        'customer_name' => $request->customer_name,
        'company' => $request->company,
        'contact' => $request->contact,
        'email' => $request->email,
        'address' => $request->address
    ]);


    Session::flash('success', 'customer added successfully');

    return redirect()->route('cart');

    }
    public function salesc(Request $request)
    {
        $this->validate($request, [
            'customer_name' => 'required',
            'company' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'email' => 'required|email'
        ]);

    $customers = Customer::create([
        'customer_name' => $request->customer_name,
        'company' => $request->company,
        'contact' => $request->contact,
        'email' => $request->email,
        'address' => $request->address
    ]);


    Session::flash('success', 'customer added successfully');

    return view('public.sales.sales_customer')->with('customers', Customer::paginate(10));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //dd($request);

        $this->validate($request, [
            'customer_name' => 'required',
            'company' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'email' => 'required|email'
        ]);
        $category = Customer::find($id);
//dd($category);
$category->customer_name = $request->customer_name;
        $category->company = $request->company;
        $category->contact = $request->contact;
        $category->address = $request->address;
        $category->email = $request->email;
        $category->save();

        Session::flash('success', 'Customer Created successfully');

        return redirect()->route('admin_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $categories = Customer::find($id);

        $categories->delete();
        Session::flash('success', ' Customer Successfully Deleted.');

        return redirect()->route('admin_index');
    }

    public function view(){
        return view('public.customers.view')->with('customers', Customer::paginate(10))->with('quotations', Quatation::all());
    }
    public function lists(){
        return view('public.customers.lists')->with('customers' , Customer::paginate(10));
    }
    public function sales_customers()
    {
        Cart::destroy();
        $customers = Customer::paginate(10);
         return view('public/sales/sales_customer',['customers' => $customers]);
    }
    public function add(){
        return view('public.customers.add');
    }

}
