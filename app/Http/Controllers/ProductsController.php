<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Supplier;
use App\Product;
use Session;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index',['products' => Product::paginate(10)])->with('categories', Category::all())->with('suppliers', Supplier::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create')->with('categories', Category::all())->with('suppliers', Supplier::all());
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

           Session::flash('success', 'Product successfully Added');

           return redirect()->route('products');
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
      $products = Product::find($id);
        return view('products.edit')->with('product' , $products)
        ->with('categories', Category::all())
        ->with('suppliers', Supplier::all());
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
                'prod_code' => 'required',
                'prod_name' => 'required',
                'price' => 'required',
                'qty' => 'required',
                'category_id' => 'required',
                'supplier_id' => 'required',
                'tax' => 'required',
                'reorder' => 'required'
              ]);


              $products = Product::find($id);

              $products->prod_code = $request->prod_code;
             $products->prod_name = $request->prod_name;
              $products->price = $request->price;
              $products->qty = $request->qty;
              $products->tax = $request->tax;
              $products->reorder = $request->reorder;
              $products->category_id = $request->category_id;
              $products->supplier_id = $request->supplier_id;


              $products->save();

              Session::flash('success', 'Product Updated successfully');

              return redirect()->route('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $products = Product::find($id);

      $products->delete();

      Session::flash('success' , 'Product Deleted Successfully');

      return redirect()->back();
    }
    public function reorder(){

            $reorder = DB::table('products')
                ->whereColumn('products.reorder', '>', 'products.qty')
                ->get();
                //dd($reorder);
            return view('admin.products.reorder',['products' => $reorder]);
    }
    public function reorders()
    {
        $count = Product::whereColumn('products.reorder', '>=', 'qty')->orderBy('prod_name')->count();
        $reorder = Product::whereColumn('products.reorder', '>=', 'qty')->orderBy('prod_name')->paginate(10);
        //dd($order->where('reorder', '>=','qty'));
       // dd($count);
        return view('public.products.reorder', ['products' => $reorder]);
    }
}
