@extends('layouts.default')

@section('title', $currentPage->title)

@section('css')
@stop

@section('js')
@stop

@section('content')
<section class="container content-section">
  <div class="row">
    <div class="col-xs-offset-2 col-xs-8">
      {!! $currentPage->content !!}
    </div>
  </div>
</section>
@stop
