</main>

<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="footer__title">Agencja J. Grzybowski</h4>
                <div class="footer__links-container">
                    <a href="/o-nas" class="footer__link">Agencja Ubezpieczeniowa J. Grzybowski</a>
                    <a href="/ubezpieczenie-komunikacyjne" class="footer__link">Ubezpieczenia komunikacyjne (ubezpieczenie OC, NNW, AC)</a>
                    <a href="/ubezpieczenie-domow-mieszkan" class="footer__link">Ubezpieczenia mieszkaniowe</a>
                    <a href="/ubezpieczenie-turystyczne" class="footer__link">Ubezpieczenia turystyczne (podróżne)</a>
                    <a href="/ubezpieczenie-zdrowotne" class="footer__link">Ubezpieczenia zdrowotne</a>
                    <a href="/ubezpieczenie-na-zycie" class="footer__link">Ubezpieczenia na życie</a>
                    <a href="/ubezpieczenie-nnw" class="footer__link">Ubezpieczenia NNW (wypadkowe)</a>
                </div>

                <h5 class="footer__title--next">Dodatkowe informacje i dokumenty</h5>
                <p>
                    <a href="/polityka-prywatnosci" class="footer__link">Polityka prywatności</a><br>
                    <a href="/dokumenty-do-pobrania" class="footer__link">Dokumenty do pobrania</a>
                </p>
            </div>

            <div class="col-md-3">
                <h4>Wołomin</h4>
                <p class="footer__paragraph footer__paragraph--first">ul. Moniuszki 9</p>
                <p class="footer__paragraph">pn.-pt. 8:00-17:00<br>
                    sobota 8:30-13:00</p>
                <p class="footer__paragraph">kontakt:<br>
                    513 079 933<br>
                    22 787 08 24</p>
            </div>

            <div class="col-md-3">
                <h4>Ząbki</h4>
                <p class="footer__paragraph footer__paragraph--first">ul. Sikorskiego 33A, lok. 43</p>
                <p class="footer__paragraph">pon.-pt. 10:00-18:00<br>
                    sobota 9:00-12:00</p>
                <p class="footer__paragraph">kontakt:<br>
                    602 33 99 50<br>
                    22 744 92 63</p>
            </div>

            <div class="col-md-3">
                <h4>Kobyłka</h4>
                <p class="footer__paragraph footer__paragraph--first">ul. Jana Pawła II 22</p>
                <p class="footer__paragraph">pon.-pt. 09:00-17:00<br>
                    w soboty nieczynne</p>
                <p class="footer__paragraph">kontakt:<br>
                    516 394 162<br>
                    22 771 84 85</p>
            </div>
        </div>
    </div>

    <div class="footer__copyright">
        <p><?php echo sprintf(__('%1$s %2$s %3$s | %4$s', 'grzybowski'), '&copy;', date('Y'), esc_html(get_bloginfo('name')), esc_html(get_bloginfo('description'))); ?></p>
        <p class="footer__createdby">Wykonanie: <a class="footer__link" href="https://softcraft.it" target="_blank" rel="noopener">SoftCraft.it</a>
        </p>
    </div>
</footer>

<div class="cookies">
    <p class="cookies__text">Strona korzysta z plików cookie. Warunki przechowywania oraz dostępu plików cookie możesz samodzielnie określić w swojej przeglądarce.</p>
    <div class="button cookies__close">Nie pokazuj</div>
</div>

<script defer>
    let navOpened = false;
    let initHeight = 432;

    function slideToggle() {

        let navMobile = document.getElementById('header__nav-mobile');

        if (navOpened) {
            navOpened = false;
            navMobile.style.height = '0';
            document.getElementById('header__toggle').classList.remove('header__toggle--open');
        } else {
            navOpened = true;
            navMobile.style.height = initHeight + 'px';
            document.getElementById('header__toggle').classList.add('header__toggle--open');
        }
    }

    // ---------- cookies banner ---------- //
    const cookieName = 'grzybowski';
    const cookieValue = 'dismissed';

    document.querySelector('.cookies__close').addEventListener('click', closeCookieBanner);

    isCookieBannerClosed();

    function closeCookieBanner() {
        const date = new Date();
        // Cookie is valid 104 days
        date.setTime(date.getTime() + (9000000000));
        document.cookie = `${cookieName}=${cookieValue};expires=${date.toUTCString()};path=/`;
        document.querySelector('.cookies').classList.remove("cookies--show");
    }

    function isCookieBannerClosed() {
        const cookies = decodeURIComponent(document.cookie).split(';');

        for (let cookie of cookies) {
            cookie = cookie.trim();
            if (cookie === `${cookieName}=${cookieValue}`) {
                document.querySelector('.cookies').classList.remove("cookies--show");
                return true;
            }
        }

        document.querySelector('.cookies').classList.add("cookies--show");
    }
    // ---------- /cookies banner ---------- //


    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/wp-content/themes/grzybowski/sw.js');
    }
</script>

<?php wp_footer(); ?>
</body>
</html>
