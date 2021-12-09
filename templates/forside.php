<?php
/**
 * Template Name: Forside
*/
get_header();?>
<section class="hero">
    <div class="hero__container container">
            <div class="hero__content container--px">
                <h1 class="hero__title">Vi bager <span>boller</span>
og laver lækker <span>kaffe</span>, <span>Sandwiches</span> og <span>salater</span></h1>
                <p class="hero__subheading">Kom endelig forbi og nyd den afslappede stemning og atmosfære.</p>
            </div>
            <a href="#about" class="hero__indicator" title="Knap til at scrolle længere ned på sitet">
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
            <h2>Kvarterets café på Albanigade</h2>
            <p>Hos Analog tror vi på kraften af nærvær, hygge og gode samtaler – alt sammen over en lækker kop kaffe eller en hjemmebagt bolle. Derfor byder vi på kvalitetskaffe, -mad og -oplevelser i hjertet af Albanikvarteret.</p>
        </div>
        <div class="about__row2">
            <p>Vi vil altid gerne fortælle mere om det, vi tilbyder. Så tjek gerne vores events ud eller kom ned og få en snak og en kop kaf’ ved siden af.</p>
            <a href="#more" class="btn btn--primary" title="Knap til at scrolle til lær os at kende sektionen">Se hvem vi er</a>
        </div>
        <figure>
                <picture>
                    <source type="image/avif" srcset="
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-380w.avif 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-640w.avif 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-380w.webp 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-640w.webp 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-kaffebar-640.jpg" alt="Hjemmelavede boller og kaffe" loading="lazy" decoding="async" height="332">
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
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-1-380w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-1-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-1-380w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-1-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-1-640.jpg" alt="Kardemommesnurrer med kaffe latte ved siden af" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure class="large">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-2-380w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-2-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-2-380w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-2-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                    <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-2-640.jpg" alt="En hjemmelavet tunsandwich med hygge i baggrunden" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure class="thin">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-5-580w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-5-640w.avif 640w"
                        sizes="(max-width: 377px) 300vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-5-580w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-5-640w.webp 640w"
                        sizes="(max-width: 377px) 300vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-5-640.jpg" alt="Kardemommesnurrer og lemonade foran et brætspil" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure class="large">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-6-680w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-6-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-6-680w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-6-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-6-640.jpg" alt="Analog indefra der viser en hyggelig stemning" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure class="large">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-3-380w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-3-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-3-380w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-3-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-3-640.jpg" alt="En pige der drikker kaffe og spiser kardemommesnurrer" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure class="large">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-7-780w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-7-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-7-780w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-7-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-7-640.jpg" alt="Venner der spiller brætspil og drikker kaffe" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                <figure class="thin">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-4-380w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-4-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-4-380w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-4-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-4-640.jpg" alt="Kanelsnurrer på et mørkt bord" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
                                <figure class="thin">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-8-380w.avif 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-8-640w.avif 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-8-380w.webp 380w,
                        <?php echo get_template_directory_uri();?>/public/images/Analog-gallery-8-640w.webp 640w"
                        sizes="(max-width: 377px) 100vw, 640px">
                        <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-gallery-8-640.jpg" alt="En varm kop cappucino" loading="lazy" decoding="async" height="332">
                    </picture>
                </figure>
            </div>
            <h3>To stay, to go eller som take-away?</h3>
            <a href="menu" class="btn btn--secondary" title="Knap til menukortet">Se vores menukort<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#8ab4f8"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg></a>
        </div>
    </section>
    <section class="more container container--py container--px gridlayout" id="more">
        <h2 class="more__heading">Mere end en almindelig kaffebar</h2>
        <p class="more__description">På trods af navnet tilbyder vi mere end blot kaffe hos Analog. Vi tilbyder også historie, hygge og forskellige events i samarbejde med lokale kunstnere.</p>
        <div class="more__divider hide-for-desktop">
            <figure></figure>
        </div>
            <div class="more__content">
                <h3>Hør hvem vi er</h3>
                <p>Fra håndværker og gymnasielærer til ejere af en kaffebar – sådan startede to mænd, som elsker mad og kaffe. Det blev til Analog kaffebar, og hos os er der plads til alle – hvad end du kommer fra lidt længere nede af gaden eller det fjerneste verdenshjørne.</p>
            </div>
        <figure id="video-listener">
                <picture>
                    <source type="image/avif" srcset="
                    <?php echo get_template_directory_uri();?>/public/images/Analog-video-thumb-380w.avif 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-video-thumb-640w.avif 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-video-thumb-380w.webp 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-video-thumb-640w.webp 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-video-thumb-640.jpg" alt="Knap til at se en video om hvem Analog er" loading="lazy" decoding="async" height="332">
                </picture>
        </figure>
    </section>
    <section class="events container container--py container--px gridlayout">
        <div class="events__sticky">
        <div>
            <h3>Vær med til lokale events og koncerter</h3>
            <a href="https://www.facebook.com/analogkaffebar/events/" rel="noopener" target="_blank" class="btn btn--primary" title="Knap til at se Analogs begivenheder på Facebook">Se på Facebook</a>
        </div>
        </div>
        <div class="events__col1">
            <div class="events__elem1">
                <figure>
                    <picture>
                    <source type="image/avif" srcset="
                    <?php echo get_template_directory_uri();?>/public/images/Analog-yoga-380w.avif 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-yoga-640w.avif 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-yoga-380w.webp 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-yoga-640w.webp 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-yoga-640.jpg" alt="Folk der dyrker fællesyoga og hygger sammen" loading="lazy" decoding="async" height="332">
                </picture>
            </figure>
            <h4>Fællesyoga</h4>
            <p class="events__text">Styrk både krop og sind ved den fælles yoga i samarbejde med Yogistii.</p>
            </div>
                    <div class="events__elem2">
                    <figure>
                <picture>
                    <source type="image/avif" srcset="
                    <?php echo get_template_directory_uri();?>/public/images/Analog-koncerter-380w.avif 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-koncerter-640w.avif 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-koncerter-380w.webp 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-koncerter-640w.webp 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-koncerter-640.jpg" alt="En koncert hos Analog, hvor Esben Svane spiller guitar" loading="lazy" decoding="async" height="332">
                </picture>
            </figure>
                        <h4>Koncerter</h4>
                    <p class="events__text">Oplev intimkoncerter i vores omrokerede kaffebar med lokale kunstnere.</p>
                    </div>
                </div>
                <div class="events__col2">
                <figure>
                    <picture>
                    <source type="image/avif" srcset="
                    <?php echo get_template_directory_uri();?>/public/images/Analog-eattogether-380w.avif 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-eattogether-640w.avif 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/public/images/Analog-eattogether-380w.webp 380w,
                    <?php echo get_template_directory_uri();?>/public/images/Analog-eattogether-640w.webp 640w"
                    sizes="(max-width: 377px) 100vw, 640px">
                    <img src="<?php echo get_template_directory_uri();?>/public/images/Analog-eattogether-640.jpg" alt="Folk der hygger og spiser sammen på Analog" loading="lazy" decoding="async" height="332">
                </picture>
            </figure>
                         <h4>Fællesspisning</h4>
                         <p class="events__text">Spis med venner, du ikke kender endnu. Menuen byder på noget nyt hver gang, men er altid hjemmelavet.</p>
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
            <a href="tel:+4551514840" title="Knap til at ringe til Analog kaffebaren">+45 51 51 48 40</a>
            <a href="mailto:analogkaffebar@gmail.com?subject=Spørgsmål til Analog&body=Kære Analog," target="_blank" rel="noopener" title="Knap til at sende en mail til Analog kaffebaren">analogkaffebar@gmail.com</a>
            <a href="https://www.facebook.com/analogkaffebar" rel="noopener" target="_blank" title="Link til Analog kaffebarens Facebook">analogkaffebar</a>
            <a href="https://www.instagram.com/analog_kaffebar" rel="noopener" target="_blank" title="Link til Analog kaffebarens Instagram">analog_kaffebar</a>
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