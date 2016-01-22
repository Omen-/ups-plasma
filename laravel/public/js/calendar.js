function loadCalendar(id, inBlock)
{

  $('#' + inBlock).html('<iframe src="https://calendar.google.com/calendar/embed?src=' + id + '&ctz=Europe/Paris" style="border: 0; min-height: 600px;" width="100%" frameborder="0" scrolling="no"></iframe>');

  /*$('#' + inBlock).fullCalendar({
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek'
      },
    lang: 'fr',
    googleCalendarApiKey: ' AIzaSyCNB6HWIvVEN-xqvWkb23HrdwK0jUZHlwQ',
    events: id,
    eventClick: function(event) {
      // opens events in a popup window
      window.open(event.url, 'gcalevent', 'width=700,height=600');
      return false;
    },

    loading: function(bool) {
      $('#loading').toggle(bool);
    }

  });*/

}
