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
                    <h4>Varme drikke</h4>
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
            <div class="menu__divider"></div>
            <div class="menu__section">
                <div class="menu__titlerow">
                    <h4>Kolde drikke</h4>
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
            <div class="menu__divider"></div>
            <div class="menu__section">
                <div class="menu__titlerow">
                    <h4>Sandwiches</h4>
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
    <section class="takeaway container container--px container--py ">
        <div class="takeaway__intro gridlayout">
            <h2>Take away med god samvittighed</h2>
            <p>Udover vores faste menukort laver vi også hjemmelavet mad hver uge som kan tages med hjem.</p>
        </div>
        <div class="takeaway__content gridlayout">
            <figure class="takeaway__image">
                        <picture>
                            <source type="image/avif" srcset="
                            <?php echo get_template_directory_uri();?>/public/images/Analog-personale-380w.avif 380w,
                            <?php echo get_template_directory_uri();?>/public/images/Analog-personale-680w.avif 680w"
                            sizes="(max-width: 377px) 100vw, 640px">
                            <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-personale-380w.webp 380w,
                            <?php echo get_template_directory_uri();?>/public/images/Analog-personale-680w.webp 680w"
                            sizes="(max-width: 377px) 100vw, 640px">
                            <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-personale-680.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                        </picture>
                    </figure>
                    <div class="takeaway__menu">
                        <h3>Take away menu</h3>
                        <p>Mørbradgryde 75,-</p>
                        <p>Boller i karry 65,-</p>
                        <p>Thaikylling 75,-</p>
                        <p>Kødsovs 65,-</p>
                        <p>Dhal 60,-</p>
                        <p>Diverse supper 50,-</p>
                        <p>Til hver ret medfølger renten ris, pasta eller en bolle. Sæsonvariation og kokkens humør afgør, hvilke retter vi har på lager ud over de ovenstående retter. Retterne købes på frost, så du kan tage dem direkte med hjem og varme op.</p>
                    </div>
                    <div class="takeaway__waste">
                        <h3>Så tæt som muligt på 0% madspild</h3>
                        <p>Det er i hvert fald noget, vi forsøger, og vi er ret tæt på. Vi køber nemlig kun råvarer, der kan holde sig i længere tid, og det er også grunden til, at take awayen købes på frost – så kan du nemlig både varme maden op og fryse den ned igen. Det er næsten 0% madspild, og det gør os glade.</p>
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