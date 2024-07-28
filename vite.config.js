import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/js/app/admin/app.js',
                'resources/js/app/user/app.js',
                'resources/scss/style-sheet.scss',
                'resources/css/app.css',
            ],
            refresh: true,
        }),
    ],
});
