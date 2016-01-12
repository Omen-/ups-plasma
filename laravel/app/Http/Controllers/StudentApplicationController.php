<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Application\StudentApplication;
use App\Models\Application\StoredPdf;

class StudentApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index.application', ["applications" => StudentApplication::all()]);
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
        'email' => 'required|email',
        'firstname' => 'required',
        'lastname' => 'required',
        'pdfs' => 'required',
      );

      $nbr = count($request->file('pdfs')) - 1;
      foreach(range(0, $nbr) as $index)
      {
        $rules['pdfs.' . $index] = 'required|mimes:pdf';
      }

      $validator = \Validator::make(\Input::all(), $rules);

      if ($validator->fails())
      {
        $validator->getMessageBag()->add('signup', 'Echec de l\'inscription');
        return redirect()->back()->withInput()->withErrors($validator);
      }

      $application = new StudentApplication(["email" => $request->input('email'), "first_name" => $request->input('firstname'), "last_name" => $request->input('lastname')]);
      $application->save();

      foreach($request->file('pdfs') as $file)
      {
        $pdf = new StoredPdf(["title" => $file->getClientOriginalName()]);
        $application->pdfs()->save($pdf);
        \Storage::disk('local')->put($pdf->id.'.pdf',  \File::get($file));
      }

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
