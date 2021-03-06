<?php

namespace App\Http\Controllers;
use App\Category;
use Session;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.categories.index')->with('categories', Category::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('admin.categories.create');
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
       'cat_name' => 'required'
    ]);

      $categories = new Category;

      $categories->cat_name = $request->cat_name;
      $categories->save();

      Session::flash('success', 'Category successfully created');



      return redirect()->route('categories');
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
      $categories = Category::find($id);

      return view('admin.categories.edit')->with('category', $categories);
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
        'cat_name' => 'required'
     ]);

            $category = Category::find($id);

             $category->cat_name = $request->cat_name;

             $category->save();

             Session::flash('success', 'Category Updated successfully.');

             return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

                $categories = Category::find($id);

                $categories->delete();
                Session::flash('success', ' Category Successfully Deleted.');

                return redirect()->route('categories');
    }
}
