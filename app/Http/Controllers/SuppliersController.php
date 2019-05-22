<?php

namespace App\Http\Controllers;
use App\Supplier;
use Illuminate\Http\Request;
use Session;
class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.suppliers.index',['suppliers' => Supplier::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.suppliers.create');
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
        'supplier_name' => 'required',
        'address' => 'required',
        'email' => 'required|email',
        'contact' => 'required'
      ]);


      $suppliers = new Supplier;

      $suppliers->supplier_name = $request->supplier_name;
      $suppliers->address = $request->address;
      $suppliers->email = $request->email;
      $suppliers->contact = $request->contact;
      $suppliers->save();

      Session::flash('success', "Supplier created successfully");

    return redirect()->route('suppliers');


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
        $supplier = Supplier::find($id);
            return view('admin.suppliers.edit')->with('supplier', $supplier)    ;
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
              'supplier_name' => 'required',
              'contact' => 'required',
              'address' => 'required',
              'email' => 'required'
            ]);

        $suppliers = Supplier::find($id);



           $suppliers->supplier_name = $request->supplier_name;
            $suppliers->contact = $request->contact;
            $suppliers->address = $request->address;
            $suppliers->email = $request->email;


            $suppliers->save();

            Session::flash('success', 'Supplier Updated');

            return redirect()->route('suppliers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $suppliers = Supplier::find($id);

      $suppliers->delete();

      Session::flash('success' , 'Supplier deleted successfully');

      return redirect()->back();
    }
}
