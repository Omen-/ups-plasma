<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Users\User;
use App\Models\Users\Role;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index.user', ["users" => User::all(), "roles" => Role::all()]);
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
      $rules = array(
        'role' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'lastname' => 'required',
        'firstname' => 'required',
      );

      $validator = \Validator::make(\Input::all(), $rules);

      if ($validator->fails())
      {
          return redirect()->back()->withInput()->withErrors($validator);
      }

      $user = new User(["email" => $request->input('email'), "last_name" => $request->input('lastname'), "first_name" => $request->input('firstname')]);
      $user->password = \Hash::make($request->input('password'));
      $user->save();
      $user->roles()->save(Role::find($request->input('role')));

      return redirect()->back();
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
        return view('admin.edit.user', ['currentEditedUser' => User::find($id), "roles" => Role::all()]);
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
      $rules = array(
        'role' => 'required',
        'email' => 'required|email',
        'password' => '',
        'lastname' => 'required',
        'firstname' => 'required',
      );

      $validator = \Validator::make(\Input::all(), $rules);

      if ($validator->fails())
      {
          return redirect()->back()->withInput()->withErrors($validator);
      }

      $user = User::find($id);

      if($request->has('password'))
      {
        $user->password = bcrypt($request->input('password'));
      }

      $user->email = $request->input('email');
      $user->last_name = $request->input('lastname');
      $user->first_name = $request->input('firstname');

      $user->roles()->detach();
      $user->roles()->save(Role::find($request->input('role')));

      $user->save();

      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      User::find($id)->roles()->detach();
      User::destroy($id);

      return \Redirect::back();
    }
}
