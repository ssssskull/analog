
<?php
// The post loop
get_header();?>
<header class="header">
    <nav class="container gridlayout container--px">
        <div class="header__wrapper">
            <a href="#/" class="header__logo" title="Analog kaffebar"></a>
            <a href="#/" class="header__toggle hide-for-desktop" id="btnHamburger" title="Navigation mobil">
                <span></span>
            </a>
            <?php wp_nav_menu(array( 'container'=> false, 'menu_class' => 'header__links hide-for-mobile', 'menu_id' => false));?>
            <div class="header__some hide-for-mobile">
                <a href="https://www.facebook.com/analogkaffebar/" title="Analog kaffebar - Facebook"><img src="wp-content/uploads/2021/11/facebook-icon.svg" alt="Facebook ikon" loading="lazy"></a><a href="https://www.instagram.com/analog_kaffebar/" title="Analog kaffebar - Instagram"><img src="wp-content/uploads/2021/11/instagram-icon.svg" alt="Instagram ikon" loading="lazy"></a>
            </div>
            </div>
        </nav>
        <?php wp_nav_menu(array( 'container'=> false, 'menu_class' => 'header__menu hide-for-desktop', 'menu_id' => false));?>

</header>
<section class="hero">
    <div class="hero__container container">
            <div class="hero__content gridlayout container--px">
                <h1 class="hero__title">Analog kaffebar</h1>
                <p class="hero__subheading">En hyggelig café, hvor du både kan
nyde en god kop kaffe og god mad.</p>
                <div class="hero__links">
                  <a href="#om-os">Lær os at kende <span></span></a>
                </div>
            </div>
    </div>
</section>
<main id="main">
    <section class="about container container--py container--px gridlayout">
        <div class="about__content">
            <h2>Om Analog kaffebar</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non voluptatum vitae ea amet! Numquam asperiores dolorem officia, pariatur mollitia recusandae, in similique a fugiat quam praesentium, eaque voluptate! Quia, saepe!
            Nobis, aliquam assumenda!</p>
        </div>
        <figure>
                <picture>
                    <source type="image/avif" srcset="
                    wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                    wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <source type="image/webp" srcset="wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                    wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                    sizes="(max-width: 377px) 100vw, 500px">
                    <img src="wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                </picture>
            </figure>
    </section>
    <section class="gallery ">
        <div class="gallery__wrapper container container--py container--px gridlayout">
            <h2>Vi serverer god mad og lækker kaffe</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ex a obcaecati dolore recusandae officiis optio earum. Quos, sed explicabo.</p>
            <div class="gallery__images">
                <!--<figure>
                    <picture>
                        <source type="image/avif" srcset="
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 500px">
                        <img src="wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure>
                    <picture>
                        <source type="image/avif" srcset="wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-380w.avif 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-380w.webp 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 500px">
                        <img src="wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure>
                    <picture>
                        <source type="image/avif" srcset="wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-380w.avif 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-380w.webp 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 500px">
                        <img src="wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure>
                    <picture>
                        <source type="image/avif" srcset="
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 500px">
                        <img src="wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                            <figure>
                    <picture>
                        <source type="image/avif" srcset="
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 500px">
                        <img src="wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure>
                    <picture>
                        <source type="image/avif" srcset="wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-380w.avif 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-380w.webp 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 500px">
                        <img src="wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure>
                    <picture>
                        <source type="image/avif" srcset="wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-380w.avif 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-380w.webp 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 500px">
                        <img src="wp-content\uploads\2021\11\Analog-kaffebar-galleri-toast-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure>
                    <picture>
                        <source type="image/avif" srcset="
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                        wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 500px">
                        <img src="wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>-->
            </div>
            <h3>Ved du ikke hvad du bestiller endnu?</h3>
            <h3>Kig på vores menukort</h3>
            <a href="menu" class="btn btn--secondary">Til menukortet</a>
        </div>
    </section>
    <section class="more container container--py container--px gridlayout">
        <h2>Mere end bare en kaffebar</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing elit, sed.</p>
        <div class="more__personale gridlayout">
            <figure>
                <picture>
                    <source type="image/avif" srcset="
                    wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                    wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <source type="image/webp" srcset="wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                    wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                    sizes="(max-width: 377px) 100vw, 500px">
                    <img src="wp-content\uploads\2021\11\Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                </picture>
            </figure>
            <div class="more__personalecontent">
                <h2>Sig hej til vores personale</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur magnam amet quas ratione vitae dolorem nostrum est obcaecati deserunt sint exercitationem nulla, reiciendis hic. Dolor dicta consectetur repellendus labore harum.</p>
            </div>
        </div>
        <!-- TODO Kevin Powell video -->
        <div class="gridlayout">
            <div class="more__sticky">
                <h2>Nye ansigter samme kaffebar altid hygge</h2>
            </div>
        </div>
        <div>
    </section>
</main>

</body>