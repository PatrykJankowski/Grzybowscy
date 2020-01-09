<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

    <section class="subpage-top">
        <?php the_post_thumbnail(); ?>
    </section>

    <section class="subpage">
        <div class="container">
            <h1 class="supage__header"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </section>
<?php endwhile; ?>
<?php get_footer(); ?>
