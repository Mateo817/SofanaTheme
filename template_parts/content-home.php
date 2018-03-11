<section <?php post_class();?>>


<?php if(is_page(42) || is_front_page() || is_archive()) { ?>
    <h2><?php the_title();?></h2>
<?php } else { ?>
    <h1><?php the_title();?></h1>
<?php } ?>
    
            <?php the_post_thumbnail('medium'); ?>
            <?php the_content('Mehr erfahren! »');?>

</section>
