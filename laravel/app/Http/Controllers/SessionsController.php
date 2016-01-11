<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Input;
use Auth;
use Redirect;

class SessionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('sessions.create');
    }

    /**
     * Representation of a login attempt
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = array(
        'email' => 'required|email',
        'password' => 'required',
      );

      $validator = \Validator::make(\Input::all(), $rules);

      if ($validator->fails())
      {
        $validator->getMessageBag()->add('login', 'Echec d\'authentification');
        return redirect()->back()->withInput($request->except('password'))->withErrors($validator);
      }

      if(!Auth::attempt([
        'email' => $request->input('email'),
        'password' => $request->input('password')
      ]))
      {
        return redirect()->back()->withInput($request->except('password'))->withErrors(['login' => 'Echec d\'authentification']);
      }

      return Redirect::back();
    }

    /**
     * Representation of a logout attempt
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Auth::logout();
        return Redirect::back();
    }
}
