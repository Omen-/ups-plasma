<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\News\News;
use App\Models\News\Category;

class NewsController extends Controller
{
  public function show($id)
  {
    return view('news', ['currentNews' => News::find($id)]);
  }

  public function index()
  {
    return view('newslist',  ['news' => News::orderBy('created_at','DESC')->limit(3)->get(), 'categories' => Category::all()]);
  }
}
