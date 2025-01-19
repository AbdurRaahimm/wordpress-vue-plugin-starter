import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    plugins: [vue()],
    build: {
        rollupOptions: {
            input: path.resolve(__dirname, 'src/main.js'), // Set the entry point to src/main.js
            output: {
                entryFileNames: 'assets/[name].js',
            },
        },
        emptyOutDir: true,
        outDir: 'dist', // Output directory
    },
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'src'),
        },
    },
});
