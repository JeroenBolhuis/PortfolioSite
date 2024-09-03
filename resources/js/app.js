import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';
import imagesLoaded from 'imagesloaded';

document.addEventListener('DOMContentLoaded', function() {
    var grid = document.querySelector('.masonry-grid');
    
    const initAOS = () => AOS.init();

    grid ? imagesLoaded(grid, initAOS) : initAOS();

    // Google Calendar Scheduling Button
    function initializeCalendarButton() {
        var target = document.getElementById('calendar-container');
        if (target && window.calendar && window.calendar.schedulingButton) {
            var label = 'Make an appointment'; // You might want to handle translations differently
            window.calendar.schedulingButton.load({
                url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ3L2W-jtuGZGEAPef1y57HPVol19JEf08SWMKHsTp2jKdEhhKvirag_iTLSujEQrZmAGcb1w_O7?gv=true',
                color: '#039BE5',
                label: label,
                target: target,
            });

            // After the button is loaded, apply Tailwind-like styles
            setTimeout(() => {
                const button = document.querySelector('.qxCTlb');
                var changedstyles = false;
                while (!changedstyles) {
                    if (button) {
                        button.classList.add('bg-gradient-to-r', 'from-purple-800', 'to-green-500', 'hover:from-purple-700', 'hover:to-green-400', 'text-white', 'font-bold', 'rounded', 'transform', 'transition', 'hover:scale-105', 'duration-300', 'ease-in-out', 'md:text-lg', 'text-wrap', 'w-full', 'md:w-auto');
                        button.style.setProperty('padding', '1rem 1.5rem', 'important');
                        changedstyles = true;
                    }
                }                        // Add an event listener for the 'click' event
                button.addEventListener('click', function() {            
                    setTimeout(() => {
                        const cont = document.querySelector('.hur54b');
                        if (cont) {
                            if (window.innerWidth < 768) { // only change padding on mobile
                                cont.style.setProperty('padding', '5rem 0.75rem 2rem 0.75rem', 'important');
                            }
                        }
                    }, 0);
                });
            }, 0); // Small delay to ensure button is rendered
        } else {
            // If the calendar script hasn't loaded yet, try again in a moment
            setTimeout(initializeCalendarButton, 100);
        }
    }

    // Start trying to initialize the calendar button
    initializeCalendarButton();
});