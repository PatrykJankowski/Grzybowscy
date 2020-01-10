<?php get_header(); ?>

<div class="banner">
    <?php $the_query = new WP_Query(array('posts_per_page' => 1)); ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="banner__news">
        <h4><?php the_title(); ?></h4>
        <p><?php echo mb_strimwidth(get_the_content(), 0, 130, '...'); ?></p>
        <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">Czytaj więcej...</a>
    </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <a class="card__item" href="/ubezpieczenie-komunikacyjne">
                    <img class="card__image"
                         src="/wp-content/themes/grzybowski/img/ubezpieczenie-komunikacyjne.webp"
                         srcset="/wp-content/themes/grzybowski/img/ubezpieczenie-komunikacyjne-485w.webp 485w,
                                 /wp-content/themes/grzybowski/img/ubezpieczenie-komunikacyjne-727w.webp 767w,
                                 /wp-content/themes/grzybowski/img/ubezpieczenie-komunikacyjne.webp 768w"
                         alt="Ubezpieczenie komunikacyjne">
                    <div class="card__content">
                        <h4 class="card__header">Ubezpieczenia komunikacyjne</h4>
                        <p class="card__text">Ubezpieczenie komunikacyjne to ubezpieczenie obejmujące samochody osobowe, ciężarówki, motocykle oraz inne pojazdy, a nawet łodzie.</p>
                        <p class="card__text">W ofercie posiadamy ubezpieczenia OC, AC i nie tylko!</p>
                        <span class="card__link">Zapoznaj się z ofertą</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a class="card__item" href="/ubezpieczenie-majatkowe-mieszkaniowe">
                    <img class="card__image" src="/wp-content/themes/grzybowski/img/ubezpieczenie-mieszkaniowe.webp" alt="Ubezpieczenie mieszkaniowe">
                    <div class="card__content">
                        <h4 class="card__header">Ubezpieczenia mieszkaniowe</h4>
                        <p class="card__text">Ubezpieczenie nieruchomości odnosi się do mienia takiego jak dom, mieszkanie, budynek w trakcie budowy oraz do innych obiektów takich jak. np. garaż czy altana.</p>
                        <span class="card__link">Zapoznaj się z ofertą</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a class="card__item" href="/ubezpieczenie-turystyczne">
                    <img class="card__image" src="/wp-content/themes/grzybowski/img/ubezpieczenie-turystyczne.webp" alt="ubezpieczenie turystyczne">
                    <div class="card__content">
                        <h4 class="card__header">Ubezpieczenia turystyczne</h4>
                        <p class="card__text">Ubezpieczenie turystyczne to ubezpieczenie przeznaczone na pokrycie kosztów leczenia, odwołania podróży, zagubionego bagażu, wypadku lotniczego oraz innych strat poniesionych podczas podróży.</p>
                        <span class="card__link">Zapoznaj się z ofertą</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a class="card__item" href="/ubezpieczenie-zdrowotne">
                    <img class="card__image" src="/wp-content/themes/grzybowski/img/ubezpieczenie-zdrowotne.webp" alt="Ubezpieczenie zdrowotne">
                    <div class="card__content">
                        <h4 class="card__header">Ubezpieczenia zdrowotne</h4>
                        <p class="card__text">Ubezpieczenie zdrowotne definiuje się jako ubezpieczenie, które przewiduje wypłaty świadczeń z tytułu choroby lub obrażeń ciała. Obejmuje ono ubezpieczenie strat w wyniku wypadku, poniesionych kosztów leczenia, inwalidztwa lub śmierci.</p>
                        <span class="card__link">Zapoznaj się z ofertą</span>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-4">
                <a class="card__item" href="/ubezpieczenie-na-zycie">
                    <img class="card__image" src="/wp-content/themes/grzybowski/img/ubezpieczenie-na-zycie.webp" alt="Ubezpieczenie na życie">
                    <div class="card__content">
                        <h4 class="card__header">Ubezpieczenia na życie</h4>
                        <p class="card__text">Ubezpieczenie na życie jest umową, w której ubezpieczyciel obiecuje wypłacić wyznaczonemu beneficjentowi sumę pieniędzy w zamian za składkę, po śmierci ubezpieczonego lub w wypadku ciężkiego uszczerbku na zdrowiu.</p>
                        <span class="card__link">Zapoznaj się z ofertą</span>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-4">
                <a class="card__item" href="/ubezpieczenie-szkolne-nnw">
                    <img class="card__image" src="/wp-content/themes/grzybowski/img/ubezpieczenie-nnw.webp" alt="Ubezpieczenie NNW">
                    <div class="card__content">
                        <h4 class="card__header">Ubezpieczenia NNW</h4>
                        <p class="card__text">Ubezpieczenie następstw nieszczęśliwych wypadków należy do grupy ubezpieczeń osobowych, w których ochroną objęte są najcenniejsze dobra, jakimi są życie lub zdrowie człowieka.</p>
                        <span class="card__link">Zapoznaj się z ofertą</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="card__item card__item--basic">
              <p>W ofercie posiadamy także inne rodzaje ubezpieczeń – napisz do nas lub zadzwoń, by dowiedzieć się więcej. Zapraszamy także do naszych placówek w Kobyłce, Wołominie oraz Ząbkach.</p>
              <a class="button--limited button" href="/kontakt">Skontaktuj się z nami!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="about__image" alt="J. Grzybowski - Ubezpieczenia" src="/wp-content/themes/grzybowski/img/agencja-ubezpieczeniowa.webp" alt="J. Grzybowski - Ubezpieczenia">
            </div>
            <div class="col-sm-6">
                <div class="about__content">
                    <?php dynamic_sidebar('about'); ?>
                    <a class="about__button button" href="/kontakt">Skontaktuj się z nami!</a>
                </div>
            </div>
        </div>
</section>

<section class="partners">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="partners__header">Współpracujemy między innymi z:</h2>
                <div class="partners__logos">
                    <img class="partners__logo partners__logo--big" alt="PZU - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/pzu.svg">
                    <img class="partners__logo partners__logo--small" alt="Warta - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/warta.webp">
                    <img class="partners__logo partners__logo--big" alt="AXA - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/axa.svg">
                    <img class="partners__logo partners__logo--big" alt="Ergo Hestia - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/ergo-hestia.webp">
                    <img class="partners__logo partners__logo--medium" alt="Compensa - Vienna Insurance Group"
                         src="/wp-content/themes/grzybowski/img/compensa.svg">
                    <img class="partners__logo partners__logo--big" alt="Generali - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/generali.svg">
                    <img class="partners__logo partners__logo--big" alt="Wiener - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/wiener.png">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
