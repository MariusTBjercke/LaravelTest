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
        laravel({
            input: ['resources/scss/main.scss', 'resources/ts/index.tsx'],
            refresh: true,
        }),
        vue({
            transformAssetUrls: {
                base: null,
                includeAbsolute: false,
            },
        }),
    ],
});
