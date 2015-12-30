@extends('layouts.default')

@section('title', 'Liste des news')

@section('css')
<link href="/assets/css/newslist.css" rel="stylesheet"></link>
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
      @if(!$category->news->isEmpty())
      <a type="button" class="btn btn-primary" data-toggle="collapse" data-parent="collapsable-news" data-target=".collapse-category-{{ $category->id }}">
        {{ ucwords($category->title) }}
      </a>
      @endif
      @endforeach
    </div>
  </div>
  <br>
  <div class="row">
    <div id="collapsable-news" data-columns>
      @foreach($news as $n)
      <div class="col-sm-6 col-md-4 collapse in collapse-category-{{ $n->getCategory()->id }}">
        <div class="news-tile">
          <div class="news-tile-overlay"></div>
          <a href="{{ '/news/' .$n->id . '-' . sluggify($n->title) }}">
            <div class="news-thumbnail">
              <img class="img-responsive" src="/assets/img/news/{{ $n->image }}" alt="{{ $n->image_desc }}" />
            </div>
            <div class="news-tile-text">
              <h2 class="news-tile-text-title">{{ $n->title }}</h2>
              <p class="news-tile-text-details">
                <span class="news-tile-text-category label label-primary">{{ $n->getCategory()->title }}</span>
                <span class="news-tile-text-date">{{ $n->updated_at->formatLocalized('%d/%m - %H:%M') }}</span>
              </p>
            </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@stop
