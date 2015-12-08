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
    if(News::find($id))
      return view('news.news', ['currentNews' => News::find($id)]);
    return redirect('/');
  }

  public function all()
  {
    return view('news.list',  ['news' => News::all(), 'categories' => Category::all()]);
  }

  public function create()
  {
    return view('admin.create.news', ['categories' => Category::all()]);
  }

  public function store(Request $request)
  {
    if($request->has('title') && $request->has('content') && ($request->has('newCategory') || $request->has('category')))
    {
      if($request->has('newCategory') && !(Category::where('title', '=', $request->input('title'))->first()))
      {
        $category = new Category(["title" => $request->input('newCategory')]);
        $category->save();
      }
      else if(Category::find($request->input('category')))
      {
        $category = Category::find($request->input('category'));
      }
      else
      {
        return redirect('/');
      }

      $news = new \App\Models\News\News(["title" => $request->input('title'), "content" => $request->input('content'), "author_id" => \Auth::user()->id]);
      $news->save();
      $news->categories()->save($category);
      return redirect('/news/' . $news->id . '-' . ucwords($news->title));
    }
    else
      return redirect('/');
  }

  public function edit($id, Request $request)
  {
    return view('admin.edit.news', ['currentEditedNews' => News::find($id), 'categories' => Category::all()]);
  }

  public function update($id, Request $request)
  {
    if(News::find($id) && $request->has('title') && $request->has('content'))
    {
      $news = News::find($id);
      $news->title = $request->input('title');
      $news->content = $request->input('content');
      $news->save();
      return redirect('/news/' . $news->id . '-' . ucwords($news->title));
    }
    else
      return redirect('/');
  }

  public function index(Request $request)
  {
    return view('admin.index.news', ['news' => News::all()]);
  }

  public function destroy(Request $request, $id)
  {
    News::find($id)->categories()->detach();
    News::destroy($id);

    return \Redirect::back();
  }
}
