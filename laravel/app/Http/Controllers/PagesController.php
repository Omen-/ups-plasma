<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Pages\Page;
use App\Models\Pages\Alias;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index.page', ['pages' => Page::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.create.page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($request->has('title') && $request->has('content'))
      {
        $page = new \App\Models\Pages\Page(["title" => $request->input('title'), "content" => $request->input('content')]);
        $page->save();
        return redirect('/page/' . $page->id . '-' . sluggify($page->title));
      }
      else
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('pages.page', ['currentPage' => Page::find($id)]);
    }

    public function alias($title)
    {
      $a = Alias::where('alias', $title)->get()->first();
      if($a)
        return $this->show($a->page_id);
      return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('admin.edit.page', ['currentEditedPage' => Page::find($id)]);
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
      if($request->has('title') && $request->has('content'))
      {
        $page = Page::find($id);
        $page->title = $request->input('title');
        $page->content = $request->input('content');
        $page->save();
        return redirect('/page/' . $page->id . '-' . sluggify($page->title));
      }
      else
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if(Page::find($id))
      {
        $a = Alias::where('page_id', $id)->get()->first();
        if(!$a)
          Page::destroy($id);
      }
      return \Redirect::back();
    }
}
