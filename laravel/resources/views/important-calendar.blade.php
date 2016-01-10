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
      <h1 class="page-header">Dates importantes</h1>
			<div class="calendar-container" id='calendar-i'></div>
			<script>loadCalendar('{{ get_content('calendar.important') }}','calendar-i')</script>

    </div>
  </div>
</div>
@stop
