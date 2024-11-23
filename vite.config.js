import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
	plugins: [
		vue(),
		laravel({
			input: [
				'resources/css/app.css',
				'resources/js/app.js',

				'public/fonts/fonts.css',

				'public/css/main.css',

				'public/scss/mixin.scss',
				'public/scss/null.scss',
				'public/scss/forms.scss',
				'public/scss/ui.scss',
				'public/scss/map.scss',
				'public/scss/popup.scss',
				'public/scss/main.scss',
				'public/scss/header.scss',
				'public/scss/footer.scss',
				'public/scss/media.scss',
				'public/scss/tovar-page.scss',
				'public/scss/services.scss',

				'public/css/header.css',
				'public/css/banner.css',
				'public/css/product-card.css',
				'public/css/advantages.css',
				'public/css/category.css',
				'public/css/cta-blk.css',
				'public/css/footer.css',
				'public/js/main.js',
			],
			refresh: true,
		}),
	],
});
