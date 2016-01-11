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
    return view('news.list',  ['news' => News::orderBy('updated_at','DESC')->get(), 'categories' => Category::all()]);
  }

  public function create()
  {
    return view('admin.create.news', ['categories' => Category::all()]);
  }

  public function store(Request $request)
  {
    $rules = array(
      'image' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg',
      'title' => 'required',
      'content' => 'required',
      'category' => 'required_without:newCategory',
      'newCategory' => 'required_without:category',
    );

    $validator = \Validator::make(\Input::all(), $rules);

    if ($validator->fails())
    {
        return redirect()->back()->withInput()->withErrors($validator);
    }

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
      return redirect()->back()->withInput()->withErrors([trans('news.category')]);
    }

    $newFilename = $this->saveNewsImage($request->file('image'));

    $news = new \App\Models\News\News(["title" => $request->input('title'), "content" => $request->input('content'), "author_id" => \Auth::user()->id, "image" => $newFilename]);
    $news->save();
    $news->categories()->save($category);
    return redirect('/news/' . $news->id . '-' . sluggify($news->title));
  }

  public function edit($id, Request $request)
  {
    return view('admin.edit.news', ['currentEditedNews' => News::find($id), 'categories' => Category::all()]);
  }

  public function update($id, Request $request)
  {
    $rules = array(
      'image' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg',
      'title' => 'required',
      'content' => 'required',
    );

    $validator = \Validator::make(\Input::all(), $rules);

    if ($validator->fails())
    {
        return redirect()->back()->withInput()->withErrors($validator);
    }

    if(!News::find($id))
    {
      return redirect()->back()->withInput()->withErrors(['News introuvable']);
    }

    $news = News::find($id);

    if($request->hasFile('image'))
    {
      $news->image = $this->updateNewsImage($request->file('image'), $news->image);
    }

    $news->title = $request->input('title');
    $news->content = $request->input('content');
    $news->save();
    return redirect('/news/' . $news->id . '-' . sluggify($news->title));
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

  private function saveNewsImage($file)
  {
    $newFilename = uniqid() . cleanFileName($file->getClientOriginalName());
    $destinationPath = public_path('assets/img/news/');
    $uploadSuccess = \Image::make($file->getRealPath())->fit(320, 180)->save($destinationPath . $newFilename);
    return $newFilename;
  }

  private function updateNewsImage($file, $name)
  {
    $destinationPath = public_path('assets/img/news/');
    $uploadSuccess = \Image::make($file->getRealPath())->fit(320, 180)->save($destinationPath . $name);
    return $name;
  }
}
