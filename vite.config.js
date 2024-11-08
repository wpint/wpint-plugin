import path from 'path';
import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';

export default defineConfig({
  server:  {
    port: 5173,
    host: '0.0.0.0',
    hmr: true
  },
  resolve: {
    alias: {
    
    },
  },
  plugins: [],
  build: {
    manifest: true,
    outDir: 'resources/scripts/dist',
    emptyOutDir: true,
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, './resources/scripts/src/script.js'),
      },
      output: {
        entryFileNames: '[name].js',
        chunkFileNames: '[name].js',
        assetFileNames: '[name].[ext]',
      },
    },
  },
});