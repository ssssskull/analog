let mix = require("laravel-mix");

mix.sass("./app/scss/style.scss", "");
mix.js("./app/js/script.js", "");
mix.setPublicPath("public"); // den selv lave en mappe og lægger dem i den
// skriv npx mix efter
// npm --cross-env
// læg billeder i public!!! eller i app folderen!

if (mix.inProduction()) {
  mix.minify(["public/app.css"]).version();
}
// , "public/app.js"
// Hvis det skulle være tailwind:
/*mix.options({
    postCss: [require('tailwindcss')]
});*/
