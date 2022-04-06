import { Calendar } from '@fullcalendar/core';
import timeGridPlugin from '@fullcalendar/timegrid';

let calendarEl = document.getElementById('calendar');

let calendar = new Calendar(calendarEl, {
    plugins: [ timeGridPlugin ],
    locale:"fr",
    firstDay:1,
    initialView: 'timeGridWeek',
    allDaySlot: false,
    headerToolbar: {
        left: 'today prev,next title',
        center: '',
        right: ''
    },
    views:{
        timeGridWeek:{
            titleFormat: {
                year: 'numeric',
                month: 'long'
            },
            slotMinTime:"8:00:00",
            slotMaxTime:"18:00:00",

        }
    },
    eventSources: [
        {
            url: '/agenda/feed/'
            //https://fullcalendar.io/docs/events-json-feed
        }
    ]
});

calendar.render();

console.log("test");



//bonjour