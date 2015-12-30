@extends('layouts.default')

@section('css')
<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.css" rel="stylesheet"></link>
<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.print.css" rel="stylesheet" media='print'></link>
@stop

@section('js')
<script src="/js/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.js"></script>
<script src="/js/gcal.js"></script>
<script src="/js/calendar.js"></script>
<script src="/js/lang/fr.js"></script>
@stop

@section('content')

<div class="container content-section">
  <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
			@foreach($trainings as $t)
			<h1 class="page-header">Calendrier de la formation "{{ $t->title }}"</h1>
			<div class="calendar-container" id='calendar-{{ $t->id }}'></div>
			<script>loadCalendar('{{ $t->calendar_id }}','calendar-{{ $t->id }}')</script>
			@endforeach
    </div>
  </div>
</div>
@stop
