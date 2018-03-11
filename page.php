<?php get_header();?>

<main class="site-main">

    <article class="site-content <?php the_title();?>">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php get_template_part('template_parts/content','page');?>
        <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content','error');?>
        <?php endif; ?>

    </article>

</main>

<?php get_footer();?>
