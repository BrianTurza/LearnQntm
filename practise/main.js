
document.addEventListener('DOMContentLoaded', function() {
var calendarEl = document.getElementById('calendar');

var calendar = new FullCalendar.Calendar(calendarEl, {
    initialDate: '<?php echo date("Y-m-d") ?>',
    initialView: 'dayGridMonth',
    headerToolbar: {
    left: 'prev,next',
    center: 'title',
    right: 'dayGridMonth'
    },
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    selectable: true,
    selectMirror: true,
    nowIndicator: true,
    events: [
    {
        title: 'All Day Event',
        start: '<?php echo date("Y-m") ?>-01',
    },
    {
        title: 'Long Event',
        start: '2020-09-07',
        end: '2020-09-10'
    },
    {
        groupId: 999,
        title: 'Repeating Event',
        start: '2020-09-09T16:00:00'
    },
    {
        groupId: 999,
        title: 'Repeating Event',
        start: '2020-09-16T16:00:00'
    },
    {
        title: 'Conference',
        start: '2020-09-11',
        end: '2020-09-13'
    },
    {
        title: 'Meeting',
        start: '2020-09-12T10:30:00',
        end: '2020-09-12T12:30:00'
    },
    {
        title: 'Lunch',
        start: '2020-09-12T12:00:00'
    },
    {
        title: 'Meeting',
        start: '2020-09-12T14:30:00'
    },
    {
        title: 'Happy Hour',
        start: '2020-09-12T17:30:00'
    },
    {
        title: 'Dinner',
        start: '2020-09-12T20:00:00'
    },
    {
        title: 'Birthday Party',
        start: '2020-09-13T07:00:00'
    },
    {
        title: 'Click for Google',
        url: '',
        start: '2020-09-28'
    }
    ],
});
calendar.render();
});