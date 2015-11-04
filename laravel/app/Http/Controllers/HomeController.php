<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\News\News;

class HomeController extends Controller
{
    public function home()
    {
      return view('home', ['news' => News::orderBy('created_at','DESC')->limit(3)->get()]);
    }
}
