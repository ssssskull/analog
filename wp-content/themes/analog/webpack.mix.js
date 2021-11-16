let mix = require("laravel-mix");

mix.sass("./app/scss/style.scss", "/css").options({
  processCssUrls: false,
});
mix.js("./app/js/script.js", "/js");
mix.setPublicPath("public"); // den selv lave en mappe og lægger dem i den
// skriv npx mix efter
// npm --cross-env
// læg billeder i public!!! eller i app folderen!

if (mix.inProduction()) {
  mix.minify(["public/css/style.css"]).version();
}
// , "public/app.js"
// Hvis det skulle være tailwind:
/*mix.options({
    postCss: [require('tailwindcss')]
});*/
