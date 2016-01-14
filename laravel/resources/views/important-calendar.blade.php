@extends('layouts.default')

@section('css')
@stop

@section('js')
@stop

@section('content')

<div class="container content-section">
  <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
      <h1 class="page-header">Dates importantes</h1>
      <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src={{ get_content('calendar.important') }}&amp;color=%23B1365F&amp;ctz=Europe%2FParis" width="100%" style="border-width:0; min-height: 600px" frameborder="0" scrolling="no"></iframe>


    </div>
  </div>
</div>
@stop
