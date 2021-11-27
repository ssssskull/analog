<!DOCTYPE html>
<html lang="da">
<head>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CafeOrCoffeeShop",
  "name": "Analog",
  "image": "www.todo.com",
  "@id": "",
  "url": "https://analogkaffebar.dk",
  "telephone": "+45 51 51 48 40",
  "priceRange": "$",
  "menu": "https://analogkaffebar.dk/menu",
  "servesCuisine": "Kaffe",
  "acceptsReservations": "true",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Albanigade 54c",
    "addressLocality": "Odense",
    "postalCode": "5000",
    "addressCountry": "DK"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 55.3930661,
    "longitude": 10.3943626
  },
  "openingHoursSpecification": [{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "08:00",
    "closes": "17:30"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Saturday",
    "opens": "09:00",
    "closes": "15:00"
  }],
  "sameAs": [
    "https://www.instagram.com/analog_kaffebar/",
    "https://www.facebook.com/analogkaffebar"
  ]
}
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preload" as="font" href="<?php echo get_template_directory_uri();?>/public/fonts/CalibreBlack.woff2" type="font/woff" crossorigin="anonymous">
  <link rel="preload" as="font" href="<?php echo get_template_directory_uri();?>/public/fonts/CalibreBold.woff2" type="font/woff" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
  <title><?php
  if (is_page('menukort') || is_page('find-os')) {
      echo the_title(). " / Analog kaffebar";
  } else {
        echo get_bloginfo();
  }?></title>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/public/images/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/public/images/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/public/images/icons/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri();?>/public/images/icons/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/public/images/icons/safari-pinned-tab.svg" color="#1d1917">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/public/images/icons/favicon.ico">
<meta name="msapplication-TileColor" content="#1d1917">
<meta name="msapplication-config" content="<?php echo get_template_directory_uri();?>/public/images/icons/browserconfig.xml">
<meta name="theme-color" content="#1d1917">


<?php wp_head();
?>
</head>
<body>
<header class="header">
    <nav>
        <div class="header__wrapper gridlayout container container--px">
            <a href="<?php echo home_url(); ?>" class="header__logo" title="Analog kaffebar logo"></a>
            <a href="#/" class="header__toggle hide-for-desktop" id="btnHamburger" title="Menu knap">
                <span></span>
            </a>
            <?php wp_nav_menu(array( 'container'=> false, 'menu_class' => 'header__links hide-for-mobile','menu_id' => false));?>
            <div class="header__some hide-for-mobile">
                <a href="https://www.facebook.com/analogkaffebar/" title="Analog kaffebar - Facebook"><svg class="some-icon" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M0 16.0878C0 24.0416 5.77733 30.6557 13.3333 31.9969V20.442H9.33333V15.9984H13.3333V12.4428C13.3333 8.44317 15.9107 6.22206 19.556 6.22206C20.7107 6.22206 21.956 6.39937 23.1107 6.57669V10.6656H21.0667C19.1107 10.6656 18.6667 11.6429 18.6667 12.8881V15.9984H22.9333L22.2227 20.442H18.6667V31.9969C26.2227 30.6557 32 24.043 32 16.0878C32 7.23929 24.8 0 16 0C7.2 0 0 7.23929 0 16.0878Z" fill="white"/>
</svg>
</a><a href="https://www.instagram.com/analog_kaffebar/" title="Analog kaffebar - Instagram"><svg  svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="some-icon" ><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
            </div>
            </div>
        </nav>
        <div class="header__menuwrapper">
            <?php wp_nav_menu(array( 'container'=> false, 'menu_class' => 'header__menu hide-for-desktop', 'menu_id' => false));?>
            <div class="header__somemenu">
                <a href="https://www.facebook.com/analogkaffebar/" title="Analog kaffebar - Facebook"><img src="<?php echo get_template_directory_uri();?>/public/images/facebook-icon.svg" alt="Facebook ikon" loading="lazy"></a><a href="https://www.instagram.com/analog_kaffebar/" title="Analog kaffebar - Instagram"><img src="<?php echo get_template_directory_uri();?>/public/images/instagram-icon.svg" alt="Instagram ikon" loading="lazy"></a>
            </div>
        </div>
</header>