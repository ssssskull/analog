<?php
/**
 * The template for displaying 404 pages (Not Found)
*/
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
<main id="main">
    <div class="notfound container container--pall">
        <div class="notfound__content">
            <h1>Oh nej...</h1>
            <p>Beklager, vi kan ikke finde den side, som du leder efter. Dette kan skyldes at den er blevet fjernet eller flyttet.</p>
            <a class="btn btn--primary" href="<?php echo home_url()?>">Tilbage til forsiden</a>
        </div>
        <div class="notfound__illustration"></div>
    </div>
</main>
</body>

