@extends('layouts.default')

@section('css')
<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.css" rel="stylesheet"></link>
<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.print.css" rel="stylesheet"></link>
@stop

@section('js')
<script src="/js/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.js"></script>
<script src="/js/gcal.js"></script>
@stop

@section('content')
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({

			// THIS KEY WON'T WORK IN PRODUCTION!!!
			// To make your own Google API key, follow the directions here:
			// http://fullcalendar.io/docs/google_calendar/
			googleCalendarApiKey: ' AIzaSyCNB6HWIvVEN-xqvWkb23HrdwK0jUZHlwQ',

			// US Holidays
			events: 'bpn4j6n6jl02gptuusuhu7v8e0@group.calendar.google.com',

			eventClick: function(event) {
				// opens events in a popup window
				window.open(event.url, 'gcalevent', 'width=700,height=600');
				return false;
			},

			loading: function(bool) {
				$('#loading').toggle(bool);
			}

		});

	});

</script>

<div class="container">
  <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
  	   <div id='calendar'></div>
    </div>
  </div>
</div>
@stop
