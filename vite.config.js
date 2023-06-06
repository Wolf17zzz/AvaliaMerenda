import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/admin.scss',
                'resources/sass/login.scss',
                'resources/js/app.js',
                'resources/sass/cadastro.scss',
                'resources/sass/navigation.scss',
                'resources/sass/home.scss',
                'resources/sass/cardapio.scss',
                'resources/sass/estrelas.scss',
                'resources/sass/usuario.scss'
            ],
            refresh: true,
        }),
    ],
});
