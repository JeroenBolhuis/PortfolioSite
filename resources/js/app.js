import './bootstrap';
import '@fontsource/archivo/400.css';
import '@fontsource/archivo/400-italic.css';
import '@fontsource/archivo/500.css';
import '@fontsource/archivo/600.css';
import '@fontsource/archivo/700.css';
import '@fontsource/azeret-mono/400.css';
import '@fontsource/azeret-mono/500.css';
import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';

window.Alpine = Alpine;
window.AOS = AOS;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        disable: () => window.matchMedia('(prefers-reduced-motion: reduce)').matches,
        once: true,
    });
});
