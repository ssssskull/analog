<?php
get_header();?>
<section class="hero hero--menu">
    <div class="hero__container container">
            <div class="hero__content container--px">
                <h1 class="hero__title">Menu</h1>
            </div>
    </div>
</section>
<main>
    <section class="assortment container container--px container--py gridlayout">
        <div class="assortment__content">
            <h2>Vores sortiment</h2>
            <p>Friskbrygget kaffe og te af enhver slags er kun en del af vores menukort. Vi laver også aftensmad ud af huset og hjemmebag for enhver smag – allerhelst med lokale råvarer. Derfor kan du være sikker på, at din kaffe, frokost eller aftensmad hos os støtter fællesskabet og lokalsamfundet i Odense.</p>
        </div>
        <figure class="assortment__illustration"></figure>
    </section>
    <section class="dark-section">
        <div class="menu container container--px container--py gridlayout">
            <h2>Menukort</h2>
            <div class="menu__section">
                <div class="menu__titlerow">
                    <h4>Kaffe og varme drikke</h4>
                    <figure></figure>
                </div>
                 <?php
                $loop = new WP_Query( array(
                    'post_type' => 'kaffe',
                    'posts_per_page' => -1
                )
                );?>
                <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                    <div class="menu__row">
                        <p><?php echo get_the_title();?></p>
                        <p><?php
                        echo get_field('pris') . ',-';
                        if(get_field('pris_mellemstor')){
                            echo ' /'. get_field('pris_mellemstor') . ',-' ;
                        }
                        if( get_field('pris-stor') ) {
                            echo ' /'. get_field('pris-stor') . ',-' ;
                        }
                        ?>
                        </p>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
            <div class="menu__section">
                <div class="menu__titlerow">
                    <h4>Varme retter</h4>
                    <figure></figure>
                </div>
                <?php
                $loop = new WP_Query( array(
                    'post_type' => 'madvare',
                    'posts_per_page' => -1
                )
                );?>
                <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                    <div class="menu__row">
                        <p><?php echo get_the_title();?></p>
                        <p><?php the_field('pris'); ?>,-</p>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
            <div class="menu__section">
                <div class="menu__titlerow">
                    <h4>Søde sager</h4>
                    <figure></figure>
                </div>
                <?php
                $loop = new WP_Query( array(
                    'post_type' => 'madvare',
                    'posts_per_page' => -1
                )
                );?>
                <!-- TODO add row for each item -->
                <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                    <div class="menu__row">
                        <p><?php echo get_the_title();?></p>
                        <p><?php the_field('pris'); ?>,-</p>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
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
                     <a href="#">Menu</a>
                </li>
                <li>
                     <a href="find-os">Find os</a>
                </li>
            </ul>
        </div>
        <div class="footer__long">
            <p>Analog kaffebar © 2019 – 2021 • Albanigade 54c, 5000 Odense C, Danmark • Tlf: +45 51 51 48 40 • CVR: xxxxxxxxx</p>
        </div>
</footer>
</body>