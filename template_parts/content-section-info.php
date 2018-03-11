<?php
$pos = get_post_custom_values('position');
?>

<section class="info">

<h2><?php the_title();?></h2>

<?php
if($pos[0] % 2 != 0) { ?>
  <section class="right">
<?php }
else { ?>
  <section class="left">
<?php } ?>


<?php the_post_thumbnail('medium'); ?>
<span>
<?php the_content('Mehr erfahren! »');?>
</span>

</section>
</section>
