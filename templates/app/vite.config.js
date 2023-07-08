import { defineConfig } from 'vite';
import { resolve } from 'path';
import vue from '@vitejs/plugin-vue';

// https://vitejs.dev/config/
export default defineConfig({
	plugins: [vue()],
	build: {
		outDir: '../../public/assets',
		rollupOptions: {
			input: {
				login: resolve(__dirname, 'login.html'),
				projects: resolve(__dirname, 'projects.html')
			},
			output: {
				entryFileNames: '[name].js', // Имя файла без хеша для каждого входного файла
				chunkFileNames: '[name].js', // Имя файла без хеша для чанков
				assetFileNames: '[name].[ext]' // Имя файла без хеша для статических ресурсов (например, изображений)
			}
		}
	}
});
