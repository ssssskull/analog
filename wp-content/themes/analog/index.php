
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
                <a href="https://www.facebook.com/analogkaffebar/" title="Analog kaffebar - Facebook"><img src="wp-content/themes/analog/public/images/svg/facebook-icon.svg" alt="Facebook ikon" loading="lazy"></a><a href="https://www.instagram.com/analog_kaffebar/" title="Analog kaffebar - Instagram"><img src="wp-content/themes/analog/public/images/svg/instagram-icon.svg" alt="Instagram ikon" loading="lazy"></a>
            </div>
            </div>
        </nav>
        <?php wp_nav_menu(array( 'container'=> false, 'menu_class' => 'header__menu hide-for-desktop', 'menu_id' => false));?>

</header>
<section class="hero">
    <div class="hero__container container">
            <div class="hero__content container--px">
                <h1 class="hero__title">Analog kaffebar</h1>
                <p class="hero__subheading">Vi bager boller og laver lækre sandwiches og salater. Kom endelig forbi og nyd den afslappede stemning og atmosfære.</p>
                <div class="hero__links">
                  <a href="#om-os">Lær os at kende <span></span></a>
                </div>
            </div>
    </div>
</section>
<main id="main">
    <section class="about container container--py container--px gridlayout">
        <div class="about__content">
            <h2>Om Analog</h2>
            <p>Hos Analog tror vi på kraften af nærvær, hygge og gode samtaler – alt sammen over en lækker kop kaffe eller en hjemmebagt bolle. Derfor byder vi på kvalitetskaffe, -mad og -oplevelser i hjertet af Albanikvarteret.</p>
        </div>
        <figure>
                <picture>
                    <source type="image/avif" srcset="
                    wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                    wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <source type="image/webp" srcset="wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                    wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                    sizes="(max-width: 377px) 100vw, 500px">
                    <img src="wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                </picture>
            </figure>
    </section>
    <section class="gallery">
        <div class="gallery__wrapper container container--py container--px gridlayout">
            <h2>God mad og lækker kaffe</h2>
            <p>... som både kan nydes hos os på kaffebaren eller tages med hjem.</p>
            <div class="gallery__images">
                <figure>
                    <picture>
                        <source type="image/avif" srcset="
                        wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                        wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                        wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 500px">
                        <img src="wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <!--<figure>
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
            <h3>Se hvad vi sælger i hus eller take-away</h3>
            <a href="menu" class="btn btn--secondary">Til menukortet <span></span></a>
        </div>
    </section>
    <section class="more container container--py container--px gridlayout">
        <h2 class="more__heading">Mere end en kaffebar</h2>
        <p class="more__description">På trods af navnet tilbyder vi mere end blot kaffe hos Analog. Vi tilbyder også historie, hygge og forskellige events i samarbejde med lokale kunstnere.</p>
        <div class="more__divider hide-for-desktop">
            <figure></figure>
        </div>
            <div class="more__content">
                <h3>Vores historie</h3>
                <p>Fra håndværker og gymnasielærer til ejere af en kaffebar – sådan startede to mænd, som elsker mad og kaffe. Det blev til Analog kaffebar, og hos os er der plads til alle – hvad end du kommer fra lidt længere nede af gaden eller det fjerneste verdenshjørne.</p>
            </div>
        <figure>
                <picture>
                    <source type="image/avif" srcset="
                    wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                    wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <source type="image/webp" srcset="wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                    wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                    sizes="(max-width: 377px) 100vw, 500px">
                    <img src="wp-content/themes/analog/app/images/Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                </picture>
            </figure>
    </section>
    <section class="events container container--py container--px gridlayout">
            <div class="events__sticky">
                <h3>Vær med til vores events og opdag lokale kunstnere</h3>
            </div>
                <div class="events__col1">
                    <div class="events__elem1">
                        <h4>Fællesyoga</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                    <div class="events__elem2">
                        <h4>Koncerter</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
                <div class="events__col2">
                         <h4>Fællesspisning</h4>
                         <p>Lorem, ipsum dolor sit amet consectetur </p>
                </div>
        </section>
</main>
<footer>
</footer>
</body>