import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';
import imagesLoaded from 'imagesloaded';
import { fromJSON } from 'postcss';

document.addEventListener('DOMContentLoaded', function() {
    var grid = document.querySelector('.masonry-grid');
    
    const initAOS = () => AOS.init();

    grid ? imagesLoaded(grid, initAOS) : initAOS();

    // Google Calendar Scheduling Button
    function initializeCalendarButton() {
        var target = document.getElementById('calendar-container');
        if (target && window.calendar && window.calendar.schedulingButton) {
            var label = target.dataset.appointmentLabel || 'Make an appointment';
            window.calendar.schedulingButton.load({
                url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3L2W-jtuGZGEAPef1y57HPVol19JEf08SWMKHsTp2jKdEhhKvirag_iTLSujEQrZmAGcb1w_O7?gv=true',
                color: '#039BE5',
                label: label,
                target: target,
            });
        } else {
            // If the calendar script hasn't loaded yet, try again in a moment
            setTimeout(initializeCalendarButton, 100);
        }
    }

    // Start trying to initialize the calendar button
    initializeCalendarButton();
});