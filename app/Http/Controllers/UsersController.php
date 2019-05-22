<?php

namespace App\Http\Controllers;

use App\User;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index',['users' => User::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
           'email' => 'required|string|email|max:255|unique:users',
           'password' => 'required',

           'name' => 'required'
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'admin' => 0,
            'password' => Hash::make($request['password']),
        ]);

        Session::flash('success', 'User Added');

      return  redirect()->route('users.index');
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

        $this->validate($request,[
            'email' => 'required|string|email|max:255',
            'password' => 'required',
            'role' => 'required',
            'name' => 'required'
        ]);
        $users = User::find($id);


        $users->$request = $users->email;
        $users->$request = Hash::make($users['password']);
        $users->$request = $users->role;
        $users->$request = $users->name;
        $users->update();
/*
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => $request['role'],
            'password' => Hash::make($request['password']),
        ]);*/
        Session::flash('success', 'updated added');

        redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $users = User::find($id);

        $users->delete();

        Session::flash('success' , 'User  deleted');

        return redirect()->back();
    }
    public function view(){
        return view('public.users.index',['users' => User::all()]);
    }
    public function change(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',

        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->update();

        Session::flash('success', 'User Updated successfully.');

        return redirect()->route('users.view');
    }
    public function logout()
    {
        Auth::logout();
        return view('welcome');
    }
}
