import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            // Agregado para producción:
            buildDirectory: 'build', // asegura que vaya a public/build
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
    },
    base: '/build/', // <-- importante para que Laravel encuentre los assets compilados
});

// import {
//     defineConfig
// } from 'vite';
// import laravel from 'laravel-vite-plugin';
// import tailwindcss from "@tailwindcss/vite";

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//         tailwindcss(),
//     ],
//     server: {
//         cors: true,
//     },
// });