import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'], // Sesuai struktur resources Anda
            refresh: true,
        }),
    ],
    build: {
        outDir: '../public_html/build', // Output ke public_html/build
        manifest: true, // Generate manifest.json
    },
});
