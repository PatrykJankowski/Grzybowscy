<?php get_header(); ?>

<div class="banner">
    <?php $the_query = new WP_Query(array('posts_per_page' => 1)); ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="banner__news">
        <h4><?php the_title(); ?></h4>
        <p><?php echo wp_trim_words(get_the_content(), 10, '...'); ?></p>
        <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">Czytaj więcej...</a>
    </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</div>

<section class="offer">
    <!--<div class="container">
        <h2>Nasza oferta</h2>
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
                        <p class="card__text">
                            Ubezpieczenie komunikacyjne to ubezpieczenie obejmujące samochody osobowe, ciężarówki, motocykle oraz inne pojazdy, a nawet łodzie.<br><br>
                            W ofercie posiadamy ubezpieczenia OC, AC i nie tylko!
                        </p>
                        <span class="card__link">Zapoznaj się z ofertą</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a class="card__item" href="/ubezpieczenie-majatkowe-mieszkaniowe">
                    <img class="card__image" src="/wp-content/themes/grzybowski/img/ubezpieczenie-mieszkaniowe.webp" alt="Ubezpieczenie mieszkaniowe">
                    <div class="card__content">
                        <h4 class="card__header">Ubezpieczenia domów i mieszkań</h4>
                        <p class="card__text">Ubezpieczenie nieruchomości oparte jest na umowie, w której ubezpieczyciel zobowiązuje się do pokrycia strat wynikłych ze zdarzeń w niej określonych.</p>
                        <span class="card__link">Zapoznaj się z ofertą</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a class="card__item" href="/ubezpieczenie-turystyczne">
                    <img class="card__image" src="/wp-content/themes/grzybowski/img/ubezpieczenie-turystyczne.webp" alt="ubezpieczenie turystyczne">
                    <div class="card__content">
                        <h4 class="card__header">Ubezpieczenia turystyczne</h4>
                        <p class="card__text">Ubezpieczenie turystyczne przeznaczone jest dla osób podróżujących prywatnie jak też służbowo za granicę oraz w Polsce. Zapewnia przede wszystkim organizację i pokrycie kosztów leczenia w razie choroby, bądź wypadku.</p>
                        <span class="card__link">Zapoznaj się z ofertą</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a class="card__item" href="/ubezpieczenie-zdrowotne">
                    <img class="card__image" src="/wp-content/themes/grzybowski/img/ubezpieczenie-zdrowotne.webp" alt="Ubezpieczenie zdrowotne">
                    <div class="card__content">
                        <h4 class="card__header">Ubezpieczenia zdrowotne</h4>
                        <p class="card__text">Ubezpieczenie zdrowotne nazywane też ubezpieczeniem medycznym zapewnia dostęp do bardzo szerokiego zakresu usług i świadczeń, które są realizowane w placówkach medycznych o wysokiej renomie.</p>
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
                <a class="card__item" href="/ubezpieczenie-nnw">
                    <img class="card__image" src="/wp-content/themes/grzybowski/img/ubezpieczenie-nnw.webp" alt="Ubezpieczenie NNW">
                    <div class="card__content">
                        <h4 class="card__header">Ubezpieczenia NNW</h4>
                        <p class="card__text">Ubezpieczenie NNW zapewnia ochronę przed skutkami nieszczęśliwych zdarzeń w życiu codziennym i w pracy. Szeroki zakres ubezpieczenia umożliwia dopasowanie ochrony do potrzeb ubezpieczonego, na całym świecie i przez całą dobę.</p>
                        <span class="card__link">Zapoznaj się z ofertą</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="card__item card__item--basic">
              <p>W ofercie posiadamy również inne rodzaje ubezpieczeń – napisz do nas lub zadzwoń, by dowiedzieć się więcej. Zapraszamy także do naszych placówek w Wołominie, Ząbkach oraz Kobyłce</p>
              <a class="button--limited button" href="/kontakt">Skontaktuj się z nami!</a>
            </div>
          </div>
        </div>
      </div>
    </div>-->




  <div class="container">
    <h2>Nasza oferta</h2>
    <div class="row">
      <div class="col-md-4">
        <a class="card__item card__item" href="/ubezpieczenie-komunikacyjne">
          <img class="card__image"
               src="/wp-content/themes/grzybowski/img/1.webp"
               alt="Ubezpieczenie komunikacyjne">
          <div class="card__content">
            <h4 class="card__header">Ubezpieczenia komunikacyjne</h4>
            <p class="card__text">
              Ubezpieczenie komunikacyjne to ubezpieczenie obejmujące samochody osobowe, ciężarowe, dostawcze, autobusy, mikrobusy, samochody specjalne, motocykle, motorowery, quady, ciągniki rolnicze, pojazdy wolnobieżne oraz inne pojazdy drogowe poruszające się po drogach publicznych.
            </p>
            <span class="card__link">Zapoznaj się z ofertą</span>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a class="card__item card__item--right" href="/ubezpieczenie-majatkowe-mieszkaniowe">
          <img class="card__image" src="/wp-content/themes/grzybowski/img/2.webp" alt="Ubezpieczenie mieszkaniowe">

          <div class="card__content card__content--right">
            <h4 class="card__header">Ubezpieczenia domów i mieszkań</h4>
            <p class="card__text">Ubezpieczenie budynków i lokali mieszkalnych obejmuje następujące rodzaje mienia:
              dom jednorodzinny,
              lokal mieszkalny lub jego stałe elementy,
              dom letniskowy,
              dom w budowie
              garaż lub inny budynek,
              budowle i obiekty małej architektury (ogrodzenie, altana),
              oraz ruchomości domowe.</p>
            <span class="card__link">Zapoznaj się z ofertą</span>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a class="card__item" href="/ubezpieczenie-turystyczne">
          <img class="card__image" src="/wp-content/themes/grzybowski/img/3.webp" alt="ubezpieczenie turystyczne">
          <div class="card__content">
            <h4 class="card__header">Ubezpieczenia turystyczne</h4>
            <p class="card__text">Ubezpieczenie turystyczne przeznaczone jest dla osób podróżujących prywatnie jak też służbowo za granicę oraz w Polsce. Zapewnia przede wszystkim organizację i pokrycie kosztów leczenia ambulatoryjnego i szpitalnego w razie choroby, bądź wypadku.</p>
            <span class="card__link">Zapoznaj się z ofertą</span>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a class="card__item card__item--right" href="/ubezpieczenie-zdrowotne">
          <img class="card__image" src="/wp-content/themes/grzybowski/img/4.webp" alt="Ubezpieczenie zdrowotne">

          <div class="card__content card__content--right">
            <h4 class="card__header">Ubezpieczenia zdrowotne</h4>
            <p class="card__text">Ubezpieczenie zdrowotne nazywane też ubezpieczeniem medycznym zapewnia dostęp do bardzo szerokiego zakresu usług i świadczeń medycznych, które są realizowane w placówkach medycznych o wysokiej renomie.</p>
            <span class="card__link">Zapoznaj się z ofertą</span>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a class="card__item" href="/ubezpieczenie-na-zycie">
          <img class="card__image" src="/wp-content/themes/grzybowski/img/5.webp" alt="Ubezpieczenie na życie">
          <div class="card__content">
            <h4 class="card__header">Ubezpieczenia na życie</h4>
            <p class="card__text">Zawierając umowę ubezpieczenia na życie są Państwo chronieni na wypadek wielu przykrych zdarzeń związanych z życiem i zdrowiem. Głównym celem ubezpieczenia na życie jest wypłata świadczenia, ale może to być także gromadzenie lub inwestowanie części wpłacanej składki.</p>
            <span class="card__link">Zapoznaj się z ofertą</span>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a class="card__item card__item--right" href="/ubezpieczenie-nnw">
          <img class="card__image" src="/wp-content/themes/grzybowski/img/6.webp" alt="Ubezpieczenie NNW">

          <div class="card__content card__content--right">
            <h4 class="card__header">Ubezpieczenia NNW</h4>
            <p class="card__text">Ubezpieczenie NNW zapewnia ochronę przed skutkami nieszczęśliwych zdarzeń w życiu codziennym i w pracy. Szeroki zakres ubezpieczenia umożliwia dopasowanie ochrony do potrzeb ubezpieczonego, na całym świecie i przez całą dobę.</p>
            <span class="card__link">Zapoznaj się z ofertą</span>
          </div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card__item card__item--basic card__item--vertical">
          <p>W ofercie posiadamy również inne rodzaje ubezpieczeń – napisz do nas lub zadzwoń, by dowiedzieć się więcej. Zapraszamy także do naszych placówek w Wołominie, Ząbkach oraz Kobyłce.</p>
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
            <div class="col-sm-4">
                <img class="about__image" alt="J. Grzybowski - Ubezpieczenia" src="/wp-content/themes/grzybowski/img/o.webp" alt="J. Grzybowski - Ubezpieczenia">
            </div>
            <div class="col-sm-8">
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
                    <img class="partners__logo partners__logo--big" alt="HDI - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/hdi.svg">
                    <img class="partners__logo partners__logo--big" alt="Generali - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/generali.svg">
                    <img class="partners__logo partners__logo--big" alt="Proama - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/proama.webp">
                    <img class="partners__logo partners__logo--big" alt="Ergo Hestia - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/ergo-hestia.webp">
                    <img class="partners__logo partners__logo--big" alt="InterRisk - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/inter-risk.webp">
                    <img class="partners__logo partners__logo--medium" alt="Compensa - Vienna Insurance Group - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/compensa.svg">
                    <img class="partners__logo partners__logo--big" alt="Wiener - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/wiener.png">
                    <img class="partners__logo partners__logo--big" alt="AXA - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/axa.svg">
                    <img class="partners__logo partners__logo--big" alt="TUW - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/tuw-tuw.webp">
                    <img class="partners__logo partners__logo--big" alt="TUZ - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/tuw-tuz.webp">
                    <img class="partners__logo partners__logo--medium" alt="Link4 - ubezpieczenia"
                         src="/wp-content/themes/grzybowski/img/link4.svg">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
