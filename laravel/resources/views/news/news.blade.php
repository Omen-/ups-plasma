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
    <div class="col-md-offset-2 col-md-8 col-xs-12">
      <div class="news-content">
        {!! $currentNews->content !!}
      </div>
    </div>
  </div>
</section>
@stop
