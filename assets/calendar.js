import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';

let calendarEl = document.getElementById('calendar');

let calendar = new Calendar(calendarEl, {
    plugins: [ timeGridPlugin ],
    locale:"fr",
    firstDay:1,
    initialView: 'timeGridWeek',
    allDaySlot: null,
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
    }
});

calendar.render();


console.log("test");

//bonjour