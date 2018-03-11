
  <?php
  if(has_post_format( 'gallery' )) { ?>
  <div class="slider">
    <div class="product-slider">
      <?php the_content();?>
    </div>
  </div>
  <?php }
  else { ?>
    <div class="product">
      <h2><?php the_title();?></h2>
      <?php the_post_thumbnail('medium'); ?>
      <?php the_content('Mehr erfahren! »');?>
    </div>
  <?php } ?>
