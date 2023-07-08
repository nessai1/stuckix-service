import { defineConfig } from 'vite';
import { resolve } from 'path';
import vue from '@vitejs/plugin-vue';
import tailwindcss from 'tailwindcss';
import { splitVendorChunkPlugin } from 'vite'

// https://vitejs.dev/config/
export default defineConfig({
	plugins: [vue(),splitVendorChunkPlugin()],
	build: {
		outDir: '../../public/assets',
		rollupOptions: {
			input: {
				login: resolve(__dirname, 'login.html'),
				projects: resolve(__dirname, 'projects.html'),
				index: resolve(__dirname, 'index.html'),
				issues: resolve(__dirname, 'issues.html'),
				issue: resolve(__dirname, 'issue.html'),
				projectAdd: resolve(__dirname, 'projectAdd.html'),
			},
			output: {
				entryFileNames: '[name].js',
				assetFileNames: '[name].[ext]',
			},
		},
		css: {
			postcss: {
				plugins: [
					tailwindcss,
				],
			},
		},
	}
});
