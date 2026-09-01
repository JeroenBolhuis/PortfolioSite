import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';

const createConfig = (hmrHost) => ({
    base: '/',
    plugins: [
        laravel([
          'resources/css/app.css',
          'resources/js/app.js',
        ]),
    ],
    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ['axios'],
                },
            },
        },
        minify: 'terser',
        terserOptions: {
            compress: {
                drop_console: true,
                drop_debugger: true,
            },
        },
    },
    server: {
        host: '0.0.0.0',
        port: process.env.VITE_PORT || 5173,
        strictPort: false,
        cors: true,
        allowedHosts: [hmrHost],
        hmr: {
            host: hmrHost,
        },
    },
});

export default defineConfig(({ mode }) => {
    const env = loadEnv(mode, process.cwd(), '');
    const appUrl = new URL(env.APP_URL || 'http://localhost');

    return createConfig(env.VITE_HMR_HOST || appUrl.hostname);
});
