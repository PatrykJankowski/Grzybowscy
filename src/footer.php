</main>


<footer id="footer" class="footer">

    <div class="container">
        <div class="row">
            <div class="c">
                <h4>Ubezpieczenia</h4>
                <ul class="footer__list">
                    <li><a href="/ubezpieczenia-komunikacyjne" class="footer__link">Ubezpieczenia komunikacyjne (ubezpieczenie OC, NNW, Autocasco)</a></li>
                    <li><a href="" class="footer__link">Ubezpieczenia nieruchomości</a></li>
                    <li><a href="" class="footer__link">Ubezpieczenia na życie</a></li>
                    <li><a href="" class="footer__link">Ubezpieczenia zdrowotne</a></li>
                    <li><a href="" class="footer__link">Ubezpieczenia turystyczne, podróżne</a></li>
                </ul>
            </div>

            <div class="c">
                <h5>Wołomin</h5>
                <p class="footer__paragraph footer__paragraph--first">ul. Moniuszki 9</p>
                <p class="footer__paragraph">pon. - pt.: 8:00 - 17:30<br>
                    soboty: 8:30 - 13:00</p>
                <p class="footer__paragraph">numery telefonu:<br>
                    22 787 08 24<br>
                    513 079 933</p>
            </div>

            <div class="c">
                <h5>Ząbki</h5>
                <p class="footer__paragraph footer__paragraph--first">ul. Sikorskiego 33A, lok. 43</p>
                <p class="footer__paragraph">pon. - pt.: 10:00 do 18:00<br>
                    soboty: 9:00 - 12:00</p>
                <p class="footer__paragraph">numery telefonu:<br>
                    22 771 84 85<br>
                    602 33 99 50</p>
            </div>

            <div class="c">
                <h5>Kobyłka</h5>
                <p class="footer__paragraph footer__paragraph--first">ul. Jana Pawła II 22</p>
                <p class="footer__paragraph">pon. - pt.: 09:00 do 17:00<br>
                    soboty: nieczynne</p>
                <p class="footer__paragraph">numery telefonu:<br>
                    22 744 92 63<br>
                    516 394 162</p>
            </div>
        </div>
    </div>

    <div class="footer__copyright">
        <p><?php echo sprintf(__('%1$s %2$s %3$s | %4$s', 'grzybowski'), '&copy;', date('Y'), esc_html(get_bloginfo('name')), esc_html(get_bloginfo('description'))); ?></p>
        <p class="footer__createdby">Wykonanie: <a class="footer__link" href="https://patrykjankowski.pl"
                                                   target="_blank">SoftCraft</a></p>
    </div>
</footer>

<script defer>
    let navOpened = false;
    let initHeight = 491;

    function slideToggle() {

        let navMobile = document.getElementById('nav-mobile');

        if (navOpened) {
            navOpened = false;
            navMobile.style.height = '0';
            document.getElementById('toggle-button').classList.remove('open');
        } else {
            navOpened = true;
            navMobile.style.height = initHeight + 'px';
            document.getElementById('toggle-button').classList.add('open');
        }
    }

    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/grzybowski/wp-content/themes/grzybowski/sw.js');
    }
</script>

<?php wp_footer(); ?>
</body>
</html>
