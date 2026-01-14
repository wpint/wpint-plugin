import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({  
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        port: 5173,
        host: 'wpint.local',
        hmr: true,
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});