import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import fg from "fast-glob";

export default defineConfig({
    define: {
        global: 'window',
    },
    server: {
        cors: {
            origin: /^https?:\/\/(?:(?:[^:]+\.)?localhost|percinmedya\.test|percinmedia\.net|percin\.0x1881\.me|127\.0\.0\.1|\[::1\])(?::\d+)?$/,
        },
    },
    plugins: [
        laravel({
            input: [
                ...fg.sync('resources/**/*.{jpg,png,svg,webp,jpeg,pneg,avif,css,js}')
            ],
            refresh: true,
        }),
        tailwindcss(),
    ]
});
