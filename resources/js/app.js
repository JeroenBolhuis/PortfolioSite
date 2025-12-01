import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

// Make AOS globally available
window.AOS = AOS;

document.addEventListener('DOMContentLoaded', function() {
    AOS.init();
});