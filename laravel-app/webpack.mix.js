const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js").sass(
    "resources/scss/app.scss",
    "public/css",
    [
        //
    ]
);
/*
mix runs on Webpack, so we need install:
- nodejs
*/
