</main>


<footer id="footer">
    <div class="footer__copyright">
        <p><?php echo sprintf( __( '%1$s %2$s %3$s | %4$s', 'grzybowscy' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' )  ), esc_html(get_bloginfo( 'description' ))); ?></p>
        <p class="footer__createdby">Wykonanie: <a href="https://patrykjankowski.pl" target="_blank">SoftCraft</a></p>
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
        }
        else {
            navOpened = true;
            navMobile.style.height = initHeight + 'px';
            document.getElementById('toggle-button').classList.add('open');
        }
    }

    if('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/grzybowscy/wp-content/themes/grzybowscy/sw.js');
    }
</script>

<?php wp_footer(); ?>
</body>
</html>
