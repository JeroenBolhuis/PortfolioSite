import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
          'resources/css/app.css',  // Ensure this path matches your CSS file location
          'resources/js/app.js',    // Ensure this path matches your JS file location
        ]),
    ],
});
