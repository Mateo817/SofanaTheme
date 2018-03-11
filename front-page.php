<?php get_header();?>

<main class="site-main">

    <article class="site-content">



        <div id="verkauf">
          <section>
            <?php

            $args = array(
                category_name => 'olivenölseife+verkauf'
            );

            $verkauf = new WP_Query($args);

            if ( $verkauf->have_posts() ) : while ( $verkauf->have_posts() ) : $verkauf->the_post(); ?>
               <?php get_template_part('template_parts/content', 'section-verkauf');?>
            <?php endwhile; else : ?>
                <?php get_template_part('template_parts/content','error');?>
            <?php endif; wp_reset_postdata(); ?>
          </section>
        </div>


        <div id="info">

            <?php

            $args = array(
                category_name => 'olivenölseife+info',
                meta_key      => 'position',
                orderby       => 'meta_value_num',
                order         => 'ASC'
            );

            $info = new WP_Query($args);

            if ( $info->have_posts() ) : while ( $info->have_posts() ) : $info->the_post(); ?>
               <?php get_template_part('template_parts/content', 'section-info');?>
            <?php endwhile; else : ?>
                <?php get_template_part('template_parts/content','error');?>
            <?php endif; wp_reset_postdata(); ?>

        </div>


        <div id="kurzinfo">

            <?php

            $args = array(
                category_name => 'olivenölseife+kurzinfo'
            );

            $kurzinfo = new WP_Query($args);

            if ( $kurzinfo->have_posts() ) : while ( $kurzinfo->have_posts() ) : $kurzinfo->the_post(); ?>
               <?php get_template_part('template_parts/content', 'section-kurzinfo');?>
            <?php endwhile; else : ?>
                <?php get_template_part('template_parts/content','error');?>
            <?php endif; wp_reset_postdata(); ?>

        </div>


        <div id="aktion">

            <?php

            $args = array(
                category_name => 'olivenölseife+aktion'
            );

            $aktion = new WP_Query($args);

            if ( $aktion->have_posts() ) : while ( $aktion->have_posts() ) : $aktion->the_post(); ?>
               <?php get_template_part('template_parts/content', 'section-aktion');?>
            <?php endwhile; else : ?>
                <?php get_template_part('template_parts/content','error');?>
            <?php endif; wp_reset_postdata(); ?>

        </div>



    </article>

</main>

<?php get_footer();?>
