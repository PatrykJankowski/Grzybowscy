</main>


<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="footer__title">Agencja J. Grzybowski</h4>
                <p>
                    <a href="/ubezpieczenia-komunikacyjne" class="footer__link">Ubezpieczenia komunikacyjne (ubezpieczenie OC, NNW, AC)</a><br>
                    <a href="" class="footer__link">Ubezpieczenia mieszkaniowe</a><br>
                    <a href="" class="footer__link">Ubezpieczenia turystyczne (podróżne)</a><br>
                    <a href="" class="footer__link">Ubezpieczenia na życie</a><br>
                    <a href="" class="footer__link">Ubezpieczenia zdrowotne</a><br>
                    <a href="" class="footer__link">Ubezpieczenia szkolne NNW</a>
                </p>

                <h5 class="footer__title--next">Dodatkowe informacje i dokumenty</h5>
                <p>
                    <a href="/ubezpieczenia-komunikacyjne" class="footer__link">Polityka prywatności</a><br>
                    <a href="" class="footer__link">Dokumenty do pobrania</a>
                </p>
            </div>

            <div class="col-md-3">
                <h4>Kobyłka</h4>
                <p class="footer__paragraph footer__paragraph--first">ul. Jana Pawła II 22</p>
                <p class="footer__paragraph">pon.-pt.: 09:00-17:00<br>
                    sobota: nieczynne</p>
                <p class="footer__paragraph">kontakt:<br>
                    22 744 92 63<br>
                    516 394 162</p>
            </div>

            <div class="col-md-3">
                <h4>Wołomin</h4>
                <p class="footer__paragraph footer__paragraph--first">ul. Moniuszki 9</p>
                <p class="footer__paragraph">pon.-pt.: 8:00-17:30<br>
                    sobota: 8:30 - 13:00</p>
                <p class="footer__paragraph">kontakt:<br>
                    22 787 08 24<br>
                    513 079 933</p>
            </div>

            <div class="col-md-3">
                <h4>Ząbki</h4>
                <p class="footer__paragraph footer__paragraph--first">ul. Sikorskiego 33A, lok. 43</p>
                <p class="footer__paragraph">pon.-pt.: 10:00-18:00<br>
                    sobota: 9:00 - 12:00</p>
                <p class="footer__paragraph">kontakt:<br>
                    22 771 84 85<br>
                    602 33 99 50</p>
            </div>
        </div>
    </div>

    <div class="footer__copyright">
        <p><?php echo sprintf(__('%1$s %2$s %3$s | %4$s', 'grzybowski'), '&copy;', date('Y'), esc_html(get_bloginfo('name')), esc_html(get_bloginfo('description'))); ?></p>
        <p class="footer__createdby">Wykonanie: <a class="footer__link" href="https://softcraft.it" target="_blank">SoftCraft.it</a>
        </p>
    </div>
</footer>

<script defer>
    let navOpened = false;
    let initHeight = 491;

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

    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/grzybowski/wp-content/themes/grzybowski/sw.js');
    }
</script>

<?php wp_footer(); ?>
</body>
</html>
