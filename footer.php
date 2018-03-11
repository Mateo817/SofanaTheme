</div>

<footer class="site-footer">

  <div id="social-platforms">
    <a class="btn btn-facebook" href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
    <a class="btn btn-twitter" href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
    <!-- <a class="btn btn-googleplus" href="#"><i class="fa fa-google-plus"></i><span>Google+</span></a> -->
    <a class="btn btn-pinterest" href="#"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
    <!-- <a class="btn btn-linkedin" href="#"><i class="fa fa-linkedin"></i><span>LinkedIn</span></a> -->
  </div>

  <div class="container">

    <nav class="nav-info">
        <?php
        $args = array(
            'theme_location' => 'nav_info',
            'depth' => 1,
            'container' => ''
        );
        wp_nav_menu($args);?>
      </nav>

      <div class="meta">
        <nav class="nav-rechtliches">
            <?php
              $args = array(
                  'theme_location' => 'nav_rechtliches',
                  'depth' => 1,
                  'container' => ''
              );
          wp_nav_menu($args);?>
      </nav>

    </div>

    <div class="copyright">
      COPYRIGHT © 2018 SOFANA.DE - ALLE RECHTE VORBEHALTEN
    </div>
  </div>
</footer>

</script>

<?php wp_footer();?>

<script type="text/javascript">

  jQuery(document).ready(function(){
    jQuery('.product-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      asNavFor: '.product-nav',
      adaptiveHeight: true
    });
  });
  jQuery(document).ready(function(){
    jQuery('.product-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.product-slider',
      dots: true,
      arrows: false,
      centerMode: true,
      focusOnSelect: true,
      adaptiveHeight: true
    });
  });

</script>

</body>
</html>
