<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Users\Role;
use App\Models\Training;
use App\Models\Users\User;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.index.student', ["students" => Role::usersof('student'), "trainings" => Training::all()]);
    }

    public function changeTraining(Request $request)
    {
      $rules = array(
        'promotion' => 'required',
        'select-students' => 'required'
      );

      $validator = \Validator::make(\Input::all(), $rules);

      if ($validator->fails())
      {
          return redirect()->back()->withErrors($validator);
      }

      $t = Training::find($request->input('promotion'));

      foreach($request->input('select-students') as $sid)
      {
        $s = User::find($sid);
        $s->trainings()->detach();
        $s->trainings()->save($t);
      }

      return redirect()->back();
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
        //
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
