<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\News\News;

class NewsController extends Controller
{
  public function show($id)
  {
    //var_dump(News::find($id)->title);
    return view('news');
  }
}
