@extends('layouts.default')

@section('title', $currentNews->title)

@section('css')
<link href="/assets/css/news.css" rel="stylesheet"></link>
@stop

@section('js')
@stop

@section('content')
<section class="container news-container content-section">
  <div class="row">
    <h2 class="news-title">{{ $currentNews->title }}</h2>
    <div class="news-title-separator"></div>
  </div>
  <div class="row">
    <div class="col-md-offset-2 col-xs-8">
      <div class="news-content">
        {!! $currentNews->content !!}
        <p class="news-author">{{ $currentNews->author->first_name . ' ' . $currentNews->author->last_name }}</p>
      </div>
    </div>
  </div>
</section>
@stop
