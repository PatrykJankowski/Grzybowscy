<?php get_header(); ?>

    <section class="subpage-top subpage-top--news"></section>

    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                        <h1><?php the_title(); ?></h1>
                        <time><?php echo get_the_date(); ?></time>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
