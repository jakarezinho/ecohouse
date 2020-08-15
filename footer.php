<footer class="f_bas">
  <div class="container">
    <p class="pull-right"><a href="#"><i class="icon-chevron-up"></i>Top</a></p>
    <h4 class="notranslate"><img src="<?php bloginfo('template_directory'); ?>/images/logo_mini.png" width="80" height="63" /> SwordFish Eco-House </h4>
    <p class="fb"> <a href="https://www.facebook.com/Swordfish.ecohouse/">SwordFish Eco-House Peniche</a> <span class="dashicons dashicons-facebook-alt"></span> </p>
    <?php wp_nav_menu(array('theme_location' 	=> 'menu_footer',  'depth' => 0, 'container' => false,'menu_class' => 'inline', 'container_class' => false, 'menu_id' => false)); ?>
	  <hr>
	  
          <p class="love notranslate">SwordFish Eco-House accept payments Paypal e Moneybookers-Skrill</p>

    <p class="love notranslate"><?php echo date('Y');?> SwordFish Eco-House Surf Camp Peniche - Portugal  <br />
    site by <a href="https://www.facebook.com/weberoic/" target="_blank">JM</a> </p>
    <?php 
  if ($deviceType=='phone' || $deviceType=='tablet' && is_home () ) 
	echo do_shortcode('[google-translator]'); ?>
  </div>
  <!--home-->
  <?php  if ( is_home ()): ?>
  <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
  <?php endif; ?>
	
<!--//HOME-->
<?php wp_footer(); ?>
</footer>
</body></html>