import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';
import imagesLoaded from 'imagesloaded';
import { fromJSON } from 'postcss';

// Make AOS globally available
window.AOS = AOS;

document.addEventListener('DOMContentLoaded', function() {
    var grid = document.querySelector('.masonry-grid');
    
    const initAOS = () => AOS.init();

    grid ? imagesLoaded(grid, initAOS) : initAOS();
});