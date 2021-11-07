<?php
// The post loop
get_header();?>
<header class="header">
<nav class="container container--px">
    <a href="#/" class="header__logo" title="Analog kaffebar"></a>
    <a href="#/" class="header__toggle hide-for-desktop" id="btnHamburger" title="Navigation mobil">
        <span></span>
    </a>
<?php wp_nav_menu(array( 'container'=> false, 'menu_class' => 'header__links hide-for-mobile', 'menu_id' => false));?>
</nav>
<?php wp_nav_menu(array( 'container'=> false, 'menu_class' => 'header__menu hide-for-desktop', 'menu_id' => false));?>
</header>
<p>Kontakt!</p>
</main>

</body>