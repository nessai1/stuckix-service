import { defineConfig } from 'vite'
import { resolve } from 'path'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue()],
  build: {
    rollupOptions: {
      input: {
        login: resolve(__dirname, 'login.html'),
        projects: resolve(__dirname, 'projects.html'),
      },
    },
  }
});
