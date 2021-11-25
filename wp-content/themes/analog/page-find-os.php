<?php
get_header();?>
<header class="header">
    <nav>
        <div class="header__wrapper gridlayout container container--px">
            <a href="#/" class="header__logo" title="Analog kaffebar"></a>
            <a href="#/" class="header__toggle hide-for-desktop" id="btnHamburger" title="Navigation mobil">
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
                <a href="https://www.facebook.com/analogkaffebar/" title="Analog kaffebar - Facebook"><img src="wp-content/themes/analog/public/images/facebook.svg" alt="Facebook ikon" loading="lazy"></a><a href="https://www.instagram.com/analog_kaffebar/" title="Analog kaffebar - Instagram"><img src="wp-content/themes/analog/public/images/instagram-icon.svg" alt="Instagram ikon" loading="lazy"></a>
            </div>
        </div>
</header>
<section class="hero hero--menu">
    <div class="hero__container container">
            <div class="hero__content container--px">
                <h1 class="hero__title">Find os</h1>
            </div>
    </div>
</section>
<main>
    <section class="find-us gridlayout container container--px container--py">
        <div class="find-us__content">
            <h2>Vi er altid glade for en snak</h2>
            <p>Ligesom vores dør er åben for en god kop kaffe, står vores telefon, mail og Facebook også til rådighed for dine spørgsmål. Vi er klar til at svare på spørgsmål om både allergener, events og udlejning af lokaler – sådan noget gør vi nemlig også (både med og uden mad og drikke).</p>
        </div>
        <div class="find-us__contact">
            <a href="https://www.google.com/maps/place/Albanigade+54C,+5000+Odense/@55.3930631,10.3943626,17z/data=!3m1!4b1!4m5!3m4!1s0x464d2008ad0f63f3:0x8e29df9c585257c1!8m2!3d55.3930631!4d10.3965513" target="_blank">Albanigade 54c, 5000 Odense C</a>
            <a href="tel:+4551514840">+45 51 51 48 40</a>
            <a href="mailto:analogkaffebar@gmail.com?subject=Spørgsmål til Analog&body=Kære Analog," target="_blank">analogkaffebar@gmail.com</a>
        </div>
    </section>
    <section class="dark-section">
        <div class="location gridlayout container container--px container--py">
            <h2>Mød os i virkeligheden</h2>
            <p>Vil du hellere snakke ansigt til ansigt? Du finder os på Albanigade 54c, Odense C. Uanset om du kommer for en længere snak eller bare for at sige hej, glæder vi os til at se dig!</p>
            <div class="location__container" id="map"></div>
            <a href="https://www.google.com/maps/place/Albanigade+54C,+5000+Odense/@55.3930631,10.3943626,17z/data=!3m1!4b1!4m5!3m4!1s0x464d2008ad0f63f3:0x8e29df9c585257c1!8m2!3d55.3930631!4d10.3965513" target="_blank" class="btn btn--secondary">Find os på Google Maps<span></span></a>
        </div>
    </section>
</main>
<footer class="footer container--py container--px ">
    <div class="footer__wrapper container gridlayout">
        <div class="footer__col1">
            <h3>Åbningstider</h3>
            <div>
                <p>Mandag-fredag:</p><p>8.00-17.30</p>
            </div>
            <div>
                <p>Lørdag:</p><p>9.00-15.00</p>
            </div>
            <div>
                <p>Søndag:</p><p>Lukket</p>
            </div>
            <p>Albanigade 54c, 5000 Odense C</p>
        </div>
        <div class="footer__col2">
            <h3>Kontakt</h3>
            <p>+45 51 51 48 40</p>
            <p>analogkaffebar@gmail.com</p>
            <a href="https://www.facebook.com/analogkaffebar">analogkaffebar</a>
            <a href="https://www.instagram.com/analog_kaffebar">analog_kaffebar</a>
        </div>
        <div class="footer__col3">
            <h3>Genveje</h3>
            <ul class="footer__links">
                <li>
                     <a href="<?php echo home_url(); ?>">Forside</a>
                </li>
                <li>
                     <a href="menu">Menu</a>
                </li>
                <li>
                     <a href="#">Find os</a>
                </li>
            </ul>
        </div>
        <div class="footer__long">
            <p>Analog kaffebar © 2019 – 2021 • Albanigade 54c, 5000 Odense C, Danmark • Tlf: +45 51 51 48 40 • CVR: xxxxxxxxx</p>
        </div>
</footer>
</body>