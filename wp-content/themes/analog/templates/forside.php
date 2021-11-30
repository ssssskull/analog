<?php
/**
 * Template Name: Forside
*/
get_header();?>
<section class="hero">
    <div class="hero__container container">
            <div class="hero__content container--px">
                <h1 class="hero__title">Vi bager boller
og laver lækre kaffe, Sandwiches og salater</h1>
                <p class="hero__subheading">Kom endelig forbi og nyd den afslappede stemning og atmosfære.</p>
            </div>
            <a href="#about" class="hero__indicator" title="Tryk for at scrolle længere ned på sitet">
                <svg width="32" height="59" viewBox="0 0 32 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1" y="1.01929" width="30" height="56" rx="15" stroke="#D3A075" stroke-width="2"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.32812 19.3937L16.2031 26.2687H17.1752L24.0503 19.3937L23.0781 18.4216L17.376 24.1223V9.76868H16.001V24.1237L10.3003 18.4202L9.32812 19.3937Z" fill="#D3A075"/>
                </svg>
            </a>
    </div>
</section>
<main>
    <section id="about" class="about container container--py container--px gridlayout">
        <div class="about__row1">
            <h2>Kaffebaren på Albanigade</h2>
            <p>Hos Analog tror vi på kraften af nærvær, hygge og gode samtaler – alt sammen over en lækker kop kaffe eller en hjemmebagt bolle. Derfor byder vi på kvalitetskaffe, -mad og -oplevelser i hjertet af Albanikvarteret.</p>
        </div>
        <div class="about__row2">
            <p>Vi vil altid gerne fortælle mere om det, vi tilbyder. Så send os gerne en besked eller kom ned og få en snak og en kaf’ ved siden af.</p>
            <a href="find-os" class="btn btn--primary" title="Find os">Find os</a>
        </div>
        <figure>
                <picture>
                    <source type="image/avif" srcset="
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                </picture>
            </figure>
    </section>
    <section class="gallery dark-section">
        <div class="gallery__wrapper container container--py container--px gridlayout">
            <h2>God mad og lækker kaffe</h2>
            <p>Såre simpelt. God mad og lækker kaffe er blandt andet, hvad du kan forvente hos Analog – både to stay og to go.</p>
            <div class="gallery__images">
                <figure class="thin">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure class="large">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-380w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-380w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure class="thin">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure class="large">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-380w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-380w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure class="large">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-380w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-380w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure class="large">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-380w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-380w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-toast-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure class="thin">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                                <figure class="thin">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
            </div>
            <h3>To stay, to go eller som take-away?</h3>
            <a href="menu" class="btn btn--secondary">Se vores menukort<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#8ab4f8"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg></a>
        </div>
    </section>
    <section class="more container container--py container--px gridlayout">
        <h2 class="more__heading">Mere end en almindelig kaffebar</h2>
        <p class="more__description">På trods af navnet tilbyder vi mere end blot kaffe hos Analog. Vi tilbyder også historie, hygge og forskellige events i samarbejde med lokale kunstnere.</p>
        <div class="more__divider hide-for-desktop">
            <figure></figure>
        </div>
            <div class="more__content">
                <h3>Vores historie</h3>
                <p>Fra håndværker og gymnasielærer til ejere af en kaffebar – sådan startede to mænd, som elsker mad og kaffe. Det blev til Analog kaffebar, og hos os er der plads til alle – hvad end du kommer fra lidt længere nede af gaden eller det fjerneste verdenshjørne.</p>
            </div>
        <figure id="video-listener">
                <picture>
                    <source type="image/avif" srcset="
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                </picture>
        </figure>
    </section>
    <section class="events container container--py container--px gridlayout">
        <div class="events__sticky">
            <h3>Vær med til <span>events</span> og opdag lokale <span>kunstnere</span></h3>
        </div>
        <div class="events__col1">
            <div class="events__elem1">
                <figure>
                    <picture>
                    <source type="image/avif" srcset="
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                </picture>
            </figure>
            <h4>Fællesyoga</h4>
            <p class="events__text">Styrk både krop og sind ved den fælles yoga i samarbejde med Yogistii.</p>
            </div>
                    <div class="events__elem2">
                    <figure>
                <picture>
                    <source type="image/avif" srcset="
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                </picture>
            </figure>
                        <h4>Fællesspisning</h4>
                    <p class="events__text">Spis med venner, du ikke kender endnu. Menuen byder på noget nyt hver gang, men er altid hjemmelavet.</p>
                    </div>
                </div>
                <div class="events__col2">
                <figure>
                    <picture>
                    <source type="image/avif" srcset="
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.avif 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.avif 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-380w.webp 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640w.webp 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-galleri-kaffe-640.jpg" alt="Avatar" loading="lazy" decoding="async" height="332">
                </picture>
            </figure>
                         <h4>Koncerter</h4>
                         <p class="events__text">Oplev intimkoncerter i vores omrokerede kaffebar med lokale kunstnere.</p>
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
                     <a href="#">Forside</a>
                </li>
                <li>
                     <a href="menu">Menu</a>
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