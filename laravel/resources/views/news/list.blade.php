@extends('layouts.default')

@section('title', 'Liste des news')

@section('css')
<link href="/assets/css/badgebox.css" rel="stylesheet"></link>
@stop

@section('js')
<script src="/js/category.js"></script>
@stop

@section('content')
<section class="container content-section">
  <h1 class="page-header">Flux d'informations</h1>
  <div class="row">
    <div class="col-xs-12">
      @foreach($categories as $category)
      <label class="btn btn-{{ $category->color }}">{{ ucwords($category->title) }} <input data-news-category="{{ $category->id }}" type="checkbox" class="news-category-toggle badgebox" checked><span class="badge">&check;</span></label>
      @endforeach
    </div>
  </div>
  <br>
  <div class="row">
    @foreach($news as $n)
    <div class="col-sm-6 col-md-4 @foreach($n->categories as $category){{ 'news-category-' . $n->id . ' ' }}@endforeach">
      <div class="thumbnail">
        <img src="/assets/img/news/{{ $n->image }}" alt="{{ $n->image_desc }}" />
        <div class="caption">
          <h3>{{ $n->title }}</h3>
          <p>{{ shortify($n->content, 300) }}...</p>
          <p><a href="{{ '/news/' .$n->id . '-' . sluggify($n->title) }}" class="btn btn-default" role="button">Lire la suite</a></p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>
@stop
