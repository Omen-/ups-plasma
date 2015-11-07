@extends('layouts.default')

@section('css')
<link href="/assets/css/news.css" rel="stylesheet"></link>
@stop

@section('js')
@stop

@section('content')
@include('includes.login')
<section class="container news-container">
  <div class="row">
    <h2 class="news-title">{{ $currentNews->title }}</h2>
    <div class="news-title-separator"></div>
  </div>
  <div class="row">
    <div class="col-xs-8">
      <figure class="news-image">
        <img src="/assets/img/news/{{ $currentNews->image }}" alt="{{ $currentNews->image_desc }}" />
        <figcaption>
          <p class="news-image-desc">{{ $currentNews->image_desc }}</p>
        </figcaption>
      </figure>
      <div class="news-content">
        {!! $currentNews->content !!}
        <p class="news-author">John DOE</p>
      </div>
    </div>
  </div>
</section>
@stop
