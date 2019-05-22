<?php

namespace App\Http\Controllers;
use App\Product;
use Gloudemans\Shoppingcart\Cart;
Use App\Category;
use App\Supplier;
use Session;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Product::whereColumn('products.reorder', '>=', 'qty')->orderBy('prod_name')->count();
        return view('public.products.index',['products' => Product::paginate(10)], ['count' => $count])->with(['categories' => Category::all()])->with(['suppliers' => Supplier::all()]);
}
public function stock(){
    return view('public.products.products',['products' => Product::paginate(10)])->with(['categories' => Category::all()])->with(['suppliers' => Supplier::all()]);
}
    public function add(){
        return view('public.products.add')->with('categories', Category::all())->with('suppliers', Supplier::all());
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
            'prod_code' => 'required',
            'prod_name' => 'required',
            'reorder' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required',
            'tax' => 'required'

        ]);

        /*$products = Product::create([
          'prod_code' => $request->prod_code,
          'prod_name' => $request->prod_name,
          'reorder' => $request->reorder,
          'price' => $request->price,
          'qty' => $request->qty,

          'tax' => $request->tax,
          'category_id' =>$request->category_id,
          'supplier_id' => $request->supplier_id

        ]);*/
        $products = new Product;

        $products->prod_code = $request->prod_code;
        $products->prod_name = $request->prod_name;
        $products->price = $request->price;
        $products->qty = $request->qty;
        $products->tax = $request->tax;
        $products->reorder = $request->reorder;
        $products->category_id = $request->category_id;
        $products->supplier_id = $request->supplier_id;


        $products->save();

        Session::flash('success', 'Product successfully created');

        return redirect()->route('inventory');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
