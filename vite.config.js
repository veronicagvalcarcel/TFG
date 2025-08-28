import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  plugins: [vue()],
  server: {
    port: 5173,             // puerto donde correrá dev server de Vue
    proxy: {
      '/api': 'http://localhost:8000',  // redirige llamadas a la API de Laravel
    },
  },
  build: {
    outDir: 'dist',          // build Vue separado
    emptyOutDir: true,
  },
});
