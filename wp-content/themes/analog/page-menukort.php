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
<h2>Menukort</h2>
<div class="menu__section">
    <h3 class="menu__title">Kager & lækkerier</h3>
<?php
$loop = new WP_Query( array(
    'post_type' => 'madvare',
    'posts_per_page' => -1
  )
);
?>

<!-- TODO add row for each item -->
<?php while ( $loop->have_posts() ) : $loop->the_post();?>
    <div class="menu__item">
        <p><?php echo get_the_title();?></p>
        <p><?php the_field('pris'); ?>,-</p>
    </div>
<?php endwhile; wp_reset_query(); ?>
</div>
</main>

</body>