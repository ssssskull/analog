<?php
get_header();?>
<section class="hero hero--menu">
    <div class="hero__container container">
            <div class="hero__content container--px">
                <h1 class="hero__title">Find os</h1>
            </div>
    </div>
</section>
<main>
    <section class="find-us gridlayout container container--px container--py">
        <div class="find-us__content">
            <h2>Vi er altid glade for en snak</h2>
            <p>Ligesom vores dør er åben for en god kop kaffe, står vores telefon, mail og Facebook også til rådighed for dine spørgsmål. Vi er klar til at svare på spørgsmål om både allergener, events og udlejning af lokaler – sådan noget gør vi nemlig også (både med og uden mad og drikke).</p>
        </div>
        <div class="find-us__contact">
            <a href="https://www.google.com/maps/place/Albanigade+54C,+5000+Odense/@55.3930631,10.3943626,17z/data=!3m1!4b1!4m5!3m4!1s0x464d2008ad0f63f3:0x8e29df9c585257c1!8m2!3d55.3930631!4d10.3965513" target="_blank">Albanigade 54c, 5000 Odense C</a>
            <a href="tel:+4551514840">+45 51 51 48 40</a>
            <a href="mailto:analogkaffebar@gmail.com?subject=Spørgsmål til Analog&body=Kære Analog," target="_blank">analogkaffebar@gmail.com</a>
        </div>
    </section>
    <section class="dark-section">
        <div class="location gridlayout container container--px container--py">
            <h2>Mød os i virkeligheden</h2>
            <p>Vil du hellere snakke ansigt til ansigt? Du finder os på Albanigade 54c, Odense C. Uanset om du kommer for en længere snak eller bare for at sige hej, glæder vi os til at se dig!</p>
            <div class="location__container" id="map"></div>
            <a href="https://www.google.com/maps/place/Albanigade+54C,+5000+Odense/@55.3930631,10.3943626,17z/data=!3m1!4b1!4m5!3m4!1s0x464d2008ad0f63f3:0x8e29df9c585257c1!8m2!3d55.3930631!4d10.3965513" target="_blank" class="btn btn--secondary">Find os på Google Maps<span></span></a>
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
                     <a href="menu">Menu</a>
                </li>
                <li>
                     <a href="#">Find os</a>
                </li>
            </ul>
        </div>
        <div class="footer__long">
            <p>Analog kaffebar © 2019 – 2021 • Albanigade 54c, 5000 Odense C, Danmark • Tlf: +45 51 51 48 40 • CVR: xxxxxxxxx</p>
        </div>
</footer>
</body>