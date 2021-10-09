const mix = require('laravel-mix');

mix.autoload({
    jquery: ['jQuery', '$', 'window.jquery']
})

mix.extract();

mix.js('src/admin/main.js', 'admin/assets/js/main.js').vue({ version: 2 });