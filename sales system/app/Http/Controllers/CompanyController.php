<?php

namespace App\Http\Controllers;
use App\company;
use Session;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.shop.index',['shop' => Company::paginate(3)]);
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
            'comp_number' => 'required',
            'address' => 'required',
            'name' => 'required',
            'contact' => 'required'
        ]);


        $shop = new Company;

        $shop->comp_number = $request->comp_number;
        $shop->address = $request->address;
        $shop->name = $request->name;
        $shop->contact = $request->contact;
        $shop->save();

        Session::flash('success', "Shop created successfully");

        return redirect()->route('shop');

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

        $this->validate($request, [
            'comp_number' => 'required',
            'address' => 'required',
            'name' => 'required',
            'contact' => 'required'
        ]);

        $shop = Company::find($id);

        $shop->comp_number = $request->comp_number;
        $shop->address = $request->address;
        $shop->name = $request->name;
        $shop->contact = $request->contact;
        $shop->save();

        Session::flash('success', "Shop created successfully");

        return redirect()->route('shop');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shop = Company::find($id);

        $shop->delete();

        Session::flash('success' , 'Shop deleted successfully');

        return redirect()->back();
    }
}
