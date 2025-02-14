import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: '/',
    plugins: [
        laravel([
          'resources/css/app.css',
          'resources/js/app.js',
        ]),
    ],
    server: {
        host: '0.0.0.0',
        hmr: {
            host: 'dev.webdevsite.nl'
        },
        cors: true
    },
});
