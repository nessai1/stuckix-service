import { defineConfig } from 'vite';
import { resolve } from 'path';
import vue from '@vitejs/plugin-vue';
import tailwindcss from 'tailwindcss';

// https://vitejs.dev/config/
export default defineConfig({
	plugins: [vue()],
	build: {
		outDir: '../../public/assets',
		rollupOptions: {
			input: {
				login: resolve(__dirname, 'login.html'),
				projects: resolve(__dirname, 'projects.html'),
				issue: resolve(__dirname, 'issue.html'),
				index: resolve(__dirname, 'index.html'),
				issues: resolve(__dirname, 'issues.html'),
				projectAdd: resolve(__dirname, 'projectAdd.html'),
			},
			output: {
				entryFileNames: '[name].js',
				chunkFileNames: '[name].js',
				assetFileNames: '[name].[ext]',
				format: 'es',
			},
		},
	}
});
