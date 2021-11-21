<?php get_header();?>
<header class="header">
    <nav>
        <div class="header__wrapper gridlayout container container--px">
            <a href="#/" class="header__logo" title="Analog kaffebar"></a>
            <a href="#/" class="header__toggle hide-for-desktop" id="btnHamburger" title="Navigation mobil">
                <span></span>
            </a>
            <?php wp_nav_menu(array( 'container'=> false, 'menu_class' => 'header__links hide-for-mobile','menu_id' => false));?>
            <div class="header__some hide-for-mobile">
                <a href="https://www.facebook.com/analogkaffebar/" title="Analog kaffebar - Facebook"><img src="../wp-content/themes/analog/public/images/facebook.svg" alt="Facebook ikon" loading="lazy"></a><a href="https://www.instagram.com/analog_kaffebar/" title="Analog kaffebar - Instagram"><img src="../wp-content/themes/analog/public/images/instagram.svg" alt="Instagram ikon" loading="lazy"></a>
            </div>
            </div>
        </nav>
        <div class="header__menuwrapper">
            <?php wp_nav_menu(array( 'container'=> false, 'menu_class' => 'header__menu hide-for-desktop', 'menu_id' => false));?>
            <div class="header__somemenu">
                <a href="https://www.facebook.com/analogkaffebar/" title="Analog kaffebar - Facebook"><img src="wp-content/themes/analog/public/images/facebook.svg" alt="Facebook ikon" loading="lazy"></a><a href="https://www.instagram.com/analog_kaffebar/" title="Analog kaffebar - Instagram"><img src="wp-content/themes/analog/public/images/instagram.svg" alt="Instagram ikon" loading="lazy"></a>
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
<p>Kontakt!</p>
</main>
<footer class="footer container--py container--px ">
    <div class="footer__wrapper container gridlayout">
        <div class="footer__col1">
            <h3>Åbningstider</h3>
            <p>Mandag-fredag:</p>
            <p>Lørdag:</p>
            <p>Søndag:</p>
            <p>Albanigade 54c, 5000 Odense C</p>
        </div>
        <div class="footer__col2">
            <h3>Kontakt</h3>
            <p>+45 51 51 48 40</p>
            <p>analogkaffebar@gmail.com</p>
        </div>
        <div class="footer__col3">
            <h3>Genveje</h3>
            <ul class="footer__links">
                <li>
                     <a href="/#">Forside</a>
                </li>
                <li>
                     <a href="/#">Menu</a>
                </li>
                <li>
                     <a href="/#">Find os</a>
                </li>
            </ul>
        </div>
        <div class="footer__long">
            <p>Analog kaffebar © 2019 – 2021 • Albanigade 54c, 5000 Odense C, Danmark • Tlf: +45 51 51 48 40 • CVR: xxxxxxxxx</p>
        </div>
</footer>
</body>