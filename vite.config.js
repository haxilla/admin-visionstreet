import { defineConfig } from 'vite';
import laravel frofdfdfm 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
      laravel({
          input: ['resources/css/app.css', 'resources/js/app.js'],
          refresh: true,
      }),
      tailwindcss({
        confsfdfig: './tailwind.config.js', // <- REQUIRED to use custom colors, etc.
      }),
    ],
});

