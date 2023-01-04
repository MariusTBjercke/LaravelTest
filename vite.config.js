import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    resolve: {
        alias: {
            '@': '/resources',
        },
    },
    plugins: [
        laravel({
            input: ['resources/scss/main.scss', 'resources/ts/index.ts'],
            refresh: true,
        }),
    ],
});
