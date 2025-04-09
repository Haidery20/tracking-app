import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build',
        assetsDir: 'assets',
        chunkSizeWarningLimit: 1000,
        sourcemap: false
    },
    server: {
        host: true,
        port: 5250,
        hmr: {
            host: 'localhost',
            protocol: 'ws'
        },
        proxy: {
            '/api': {
                target: 'http://localhost:8000',
                changeOrigin: true,
                secure: false
            }
        },
        watch: {
            usePolling: true,
            interval: 1000
        }
    }
});
