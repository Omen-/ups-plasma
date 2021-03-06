<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Training;

class TrainingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index.training', ["trainings" => Training::all()]);
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
        'title' => 'required',
        'calendar' => 'required',
      );

      $validator = \Validator::make(\Input::all(), $rules);

      if ($validator->fails())
      {
          return redirect()->back()->withInput()->withErrors($validator);
      }

      (new \App\Models\Training(["title" => $request->input('title'), "calendar_id" => $request->input('calendar')]))->save();

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
        return view('admin.edit.training', ['currentEditedTraining' => Training::find($id)]);
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
        'title' => 'required',
        'calendar' => 'required',
      );

      $validator = \Validator::make(\Input::all(), $rules);

      if ($validator->fails())
      {
          return redirect()->back()->withInput()->withErrors($validator);
      }

      if(!Training::find($id))
      {
        return redirect()->back()->withInput()->withErrors(['News introuvable']);
      }

      $t = Training::find($id);

      $t->title = $request->input('title');
      $t->calendar_id = $request->input('calendar');
      $t->save();

      return redirect('/admin/training/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Training::destroy($id);
      return \Redirect::back();
    }
}
