function loadCalendar(id, inBlock)
{

  $('#' + inBlock).html('<iframe src="/raw-calendar?calendarId=pu3v73e3rqol9mtbd9fbp8k0ig@group.calendar.google.com" width="800" height="600" frameborder="0" scrolling="no"></iframe>');

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
