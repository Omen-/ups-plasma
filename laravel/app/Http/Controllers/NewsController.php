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
    return view('news.news', ['currentNews' => News::find($id)]);
  }

  public function index()
  {
    return view('news.list',  ['news' => News::all(), 'categories' => Category::all()]);
  }
}
