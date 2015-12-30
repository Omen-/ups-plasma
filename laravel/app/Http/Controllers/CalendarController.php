<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Training;

class CalendarController extends Controller
{
  public function index()
  {
    return view('calendar', ['trainings' => \Auth::user()->trainings]);
  }
}
