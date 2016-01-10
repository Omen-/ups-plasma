<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EditableContentController extends Controller
{
    public function index()
    {
      return view('admin.index.content');
    }

    public function store(Request $request)
    {
      $rules = array(
        'front-image' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg',
        'front-title' => '',
        'front-subtitle' => '',
        'calendar-important' => '',
      );

      $validator = \Validator::make(\Input::all(), $rules);

      if ($validator->fails())
      {
          return redirect()->back()->withErrors($validator);
      }

      if($request->hasFile('front-image'))
      {
        $destinationPath = public_path('assets\\img\\banner.png');
        $uploadSuccess = \Image::make($request->file('front-image')->getRealPath())->save($destinationPath);
      }

      if($request->has('front-title'))
      {
        set_content('front.title', $request->input('front-title'));
      }

      if($request->has('front-subtitle'))
      {
        set_content('front.subtitle', $request->input('front-subtitle'));
      }

      if($request->has('calendar-important'))
      {
        set_content('calendar.important', $request->input('calendar-important'));
      }

      return redirect()->back();
    }
}
