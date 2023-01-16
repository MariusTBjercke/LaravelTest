import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    resolve: {
        alias: {
            '@': '/resources',
        },
    },
    plugins: [
        vue(),
        laravel({
            input: ['resources/scss/main.scss', 'resources/ts/index.ts'],
            refresh: true,
        }),
    ],
});
