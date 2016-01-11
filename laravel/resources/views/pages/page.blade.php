@extends('layouts.default')

@section('title', $currentPage->title)

@section('css')
@stop

@section('js')
@stop

@section('content')
<section class="container content-section">
  <div class="row">
    <div class="col-md-offset-2 col-md-8 col-xs-12">
      {!! $currentPage->content !!}
    </div>
  </div>
</section>
@stop
