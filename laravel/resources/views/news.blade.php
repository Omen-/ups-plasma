@extends('layouts.default')

@section('css')
<link href="/assets/css/news.css" rel="stylesheet"></link>
@stop

@section('js')
@stop

@section('navbar-content')
<div class="row">
  <button type="button" class="btn btn-default btn-nav" aria-label="Left Align">
    <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
  </button>
  <button type="button" class="btn btn-default btn-nav" aria-label="Left Align">
    <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
  </button>
</div>
@stop

@section('content')
<section class="container news-container">
  <h2 class="news-title">News 1</h2>
  <div class="news-title-separator"></div>
  <div class="news-image">
    <img src="/assets/img/news/news_default.png" />
    <p class="news-image-desc">Lorem ipsum dolor sit amet.</p>
  </div>
  <div class="news-content row">
    <div class="col-xs-8">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget turpis est. Aliquam viverra vel enim id vehicula. Vivamus sagittis urna ac nibh vestibulum dignissim. Sed dapibus, quam iaculis sollicitudin lobortis, ligula neque ullamcorper enim, id convallis augue justo et ligula. Sed convallis cursus quam in volutpat. Pellentesque semper auctor turpis ac pulvinar. Duis id luctus ante. Nullam molestie at nisi at lacinia. Mauris consequat magna dapibus aliquet rutrum. </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget turpis est. Aliquam viverra vel enim id vehicula. Vivamus sagittis urna ac nibh vestibulum dignissim. Sed dapibus, quam iaculis sollicitudin lobortis, ligula neque ullamcorper enim, id convallis augue justo et ligula. Sed convallis cursus quam in volutpat. Pellentesque semper auctor turpis ac pulvinar. Duis id luctus ante. Nullam molestie at nisi at lacinia. Mauris consequat magna dapibus aliquet rutrum. </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget turpis est. Aliquam viverra vel enim id vehicula. Vivamus sagittis urna ac nibh vestibulum dignissim. Sed dapibus, quam iaculis sollicitudin lobortis, ligula neque ullamcorper enim, id convallis augue justo et ligula. Sed convallis cursus quam in volutpat. Pellentesque semper auctor turpis ac pulvinar. Duis id luctus ante. Nullam molestie at nisi at lacinia. Mauris consequat magna dapibus aliquet rutrum. </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget turpis est. Aliquam viverra vel enim id vehicula. Vivamus sagittis urna ac nibh vestibulum dignissim. Sed dapibus, quam iaculis sollicitudin lobortis, ligula neque ullamcorper enim, id convallis augue justo et ligula. Sed convallis cursus quam in volutpat. Pellentesque semper auctor turpis ac pulvinar. Duis id luctus ante. Nullam molestie at nisi at lacinia. Mauris consequat magna dapibus aliquet rutrum. </p>
      <p class="news-author">Arthur BELLAL</p>
    </div>
  </div>
</section>
@stop
