<aside>
  <div class="span4">
    <hr class="featurette-divider">
    <p class="text-center"><img src="<?php bloginfo('template_directory'); ?>/images/logo_sidebar.jpg" width="305" height="250" /></p>
    <p><strong>SwordFish Eco-House Peniche - Portugal</strong></p>
    <p> Booking e infos <a href="<?php bloginfo('siteurl'); ?>/reservation-policy/">reservation policy</a></p>
    <p><a class="btn btn-large btn-block btn-primary" href="tel:00351960072957">+351 960 072 957</a> </p>
    <p> <span class="dashicons dashicons-email-alt"></span> Email: swordfishouses@gmail.com  </p>
    <p>
      <a class="btn btn-large btn-block btn-primary" href="mailto:swordfishouses@gmail.com?subject=booking/infos">Contact</a></p>
    <hr class="featurette-divider">
	  <p class="subtitle"> <span class="dashicons dashicons-star-filled"></span> ROOM FACILITIES</p>
    <?php wp_nav_menu(array('theme_location' => 'menu_room_facilities', 'menu_class' => 'nav nav-tabs nav-stacked',  'container' => 'ul')); ?>
	  <p class=" subtitle"><span class="dashicons dashicons-plus"></span> INFOS</p>
    <?php wp_nav_menu(array('theme_location' => 'menu_infos', 'menu_class' => 'nav nav-tabs nav-stacked',  'container' => 'ul')); ?>

    <h3>Weather Peniche</h3>
    <?php include('tempo.php'); ?>
    <!--follow fb-->
    <div class="hidden-phone">
      <h4>Follow </h4>
      <div class="fb-page" data-href="https://www.facebook.com/Swordfish.ecohouse/" data-tabs="" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
        <blockquote cite="https://www.facebook.com/Swordfish.ecohouse/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Swordfish.ecohouse/">SwordFish Eco-House Peniche</a></blockquote>
      </div>
    </div>
    <div class="hidden-desktop">
      <div class="fb-like-box" data-href="https://www.facebook.com/Swordfish.Hostel" data-width="292" data-show-faces="false" data-stream="false" data-show-border="false" data-header="false"></div>
    </div>
    <hr class="featurette-divider">
    <div class="pay">
      <p>SwordFish Eco-House accept payments Paypal e Moneybookers - Skrill</p>
    </div>
    <hr class="featurette-divider">
  </div>
  <!--aside-->
</aside>