<?php get_header(); ?>

<section class="container offer">

    <div class="row">
        <div class="c">
            <a href="/o-nas-nauka-plywania-w-warszawie/" class="fire">
                <img alt="grzybowscy, Warszawa - ogień" src="/grzybowscy/wp-content/themes/grzybowscy/img/ogien.png" />
                <h4>O nas</h4>
            </a>
        </div>
        <div class="c">
            <a href="/nauka-plywania-warszawa" class="water">
                <img alt="Nauka pływania, Warszawa - woda" src="/grzybowscy/wp-content/themes/grzybowscy/img/woda.png" />
                <h4>Nauka pływania</h4>
            </a>
        </div>
        <div class="c">
            <a href="/treningi" class="ground">
                <img alt="Trening personalny, Warszawa - ziemia" src="/grzybowscy/wp-content/themes/grzybowscy/img/ziemia.png" />
                <h4>Treningi</h4>
            </a>
        </div>
        <div class="c">
            <a href="/obozy-sportowe-warszawa" class="wind">
                <img alt="Obozy sportowe, Warszawa - wiatr" src="/grzybowscy/wp-content/themes/grzybowscy/img/wiatr.png" />
                <h4>Obozy sportowe</h4>
            </a>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <?php dynamic_sidebar('about'); ?>
    </div>
</section>

<section class="swimming">
    <div class="container">
        <div class="row">
            <div class="c c6">
                <img alt="Nauka pływania - Warszawa Wola" src="/grzybowscy/wp-content/themes/grzybowscy/img/nauka-plywania-dla-dzieci.jpg">
            </div>
            <div class="c c4">
                <?php dynamic_sidebar('swimming'); ?>
            </div>
        </div>
    </div>
</section>

<section class="trainings">
    <div class="container">
        <div class="row">
            <div class="c c6 inverted">
                <img alt="Trening personalny, Warszawa" src="/grzybowscy/wp-content/themes/grzybowscy/img/zajecia-ogolnorozwojowe.jpg">
            </div>
            <div class="c c4">
                <?php dynamic_sidebar('trainings'); ?>
            </div>
        </div>
    </div>
</section>

<section class="camps">
    <div class="container">
        <div class="row">
            <div class="c c6">
                <img alt="Obozy sportowe, Warszawa" src="/grzybowscy/wp-content/themes/grzybowscy/img/obozy.jpg">
            </div>
            <div class="c c4">
                <?php dynamic_sidebar('camps'); ?>
            </div>
        </div>
    </div>
</section>

<section class="partners">
    <div class="container">
        <div class="row">
            <div class="c">
                <h2>Nasi partnerzy</h2>
                <a href="http://bedzieladnie.com" target="_blank" rel="nofollow noopener">
                    <img alt="będzie ładnie - partner" src="/grzybowscy/wp-content/themes/grzybowscy/img/bedzie-ladnie.png">
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
