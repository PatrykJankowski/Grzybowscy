<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

    <section class="subpage-top">
        <div class="container">
            <div class="subpage-top__container">
                <?php the_post_thumbnail(); ?>
                <div class="subpage-top__headers">
                    <h1 class="subpage-top__header"><?php the_title(); ?></h1>
                    <h2 class="subpage-top__subheader">Wołomin, Ząbki, Kobyłka</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="subpage">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>
<?php endwhile; ?>
<?php get_footer(); ?>
