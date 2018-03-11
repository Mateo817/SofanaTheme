<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title('');?> <?php bloginfo('name');?></title>

    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_enqueue_script('comment-reply');?>
    <?php wp_head();?>

      <?php if(is_front_page()) { ?>
        <style>

          .site-header {
              content:'';
              display:block;
              position: absolute;
              align-items: center;
              top:0;
              left:0;
              right:0;
              height: 100vh;
              background-image: url(<?php header_image();?>);
              background-attachment: fixed;
              background-position: bottom;
              background-repeat: no-repeat;
              background-size: cover;
          }
        </style>
      <?php } ?>

</head>

<body <?php body_class();?>>

<div class="container">
  <header class="site-header">
    <h1><span class="logo"><?php bloginfo('name');?></span><br><?php bloginfo('description');?></h1>

    <nav class="site-nav">
        <a class="logo" href="<?php echo home_url('/');?>">
          <span class="logo"><?php bloginfo('name');?></span>
        </a>
       <?php

        $args = array(
            'theme_location' => 'nav_main',
            'depth' => 2,
            'container' => ''
        );

        wp_nav_menu($args);?>
    </nav>
</header>