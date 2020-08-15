<?php include('header.php'); ?>
<!--head//-->

<body <?php body_class(); ?>>
	<?php include('includes/google_tag.php');?>
	
  <?php include('includes/navbar_top.php'); ?>
  <!-- Carousel
    ================================================== -->
  <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/slide-01.jpg');">
        <div class="container">
          <div class="carousel-caption">
            <h1><span> SwordFish Eco-House </span></h1>
            <p class="lead"><span>SwordFish Eco-House has the capacity for 12 people, includes fully equipped kitchen, lounge with TV and Wi-Fi Internet, two garden-terrace perfect for socializing.</span></p>
          </div>
        </div>
      </div>
      <div class="item" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/slide-02.jpg');">
        <div class="container">
          <div class="carousel-caption">
            <h1><span>Peniche Capital of the Wave</span></h1>
            <p class="lead"><span>Our central location makes it easy to access to the beach or make a trip around the coast</span>.</p>
          </div>
        </div>
      </div>
      <div class="item" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/slide-03.jpg');">
        <div class="container">
          <div class="carousel-caption">
            <h1><span>Upcycling starts with us</span></h1>
            <p class="lead"><span>The decoration of the SwordFish Eco-House is made of upcycling.</span></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control notranslate" href="#myCarousel" data-slide="prev">&lsaquo;</a> <a class="right carousel-control notranslate" href="#myCarousel" data-slide="next">&rsaquo;</a>
  </div>
  <!-- /.carousel -->
  <!-- Marketing messaging and featurettes
    ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container">
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <?php
      if ($deviceType == 'computer')
        echo do_shortcode('[google-translator]'); ?>
      <hr class=" hidden-phone featurette-divider">

      <ul class="thumbnails">
        <li class="span3 intro">
			<div> <a href="<?php bloginfo('siteurl'); ?>/berlenga-bedroom/"><img src="<?php bloginfo('template_directory'); ?>/images/berlenga_intro.jpg" width="300" height="150"></a>
            <h2>Berlenga Bedroom</h2>
            <p> Full capacity: 4 persons - 2 Bunks, Balconie, Wardrobe, Individual reading lights, Individual safe box, Linen and towels included, Free Internet Wi-Fi, Breakfast included </p>
            <p><a href="<?php bloginfo('siteurl'); ?>/berlenga-bedroom/" title="Berlenga Bedroom" class="btn">View details &raquo;</a></p>
          </div>
        </li>
        <!-- /.span3 -->
        <li class="span3 intro">
			<div><a href="<?php bloginfo('siteurl'); ?>/baleal-bedroom/"><img src="<?php bloginfo('template_directory'); ?>/images/baleal_intro.jpg" width="300" height="150"></a>
            <h2>Baleal Bedroom</h2>
            <p>Full capacity: 4 persons, 2 Bunks, Wardrobe, Individual reading lights, Individual safe box, Linen and towels included, Free Internet Wi-Fi, Breakfast included</p>
            <p><a href="<?php bloginfo('siteurl'); ?>/baleal-bedroom/" title="beleal bedroom" class="btn">View details &raquo;</a></p>
          </div>
        </li>
        <!-- /.span3 -->
        <li class="span3 intro">
			<div> <a href="<?php bloginfo('siteurl'); ?>/fisherman-bedroom/"><img src="<?php bloginfo('template_directory'); ?>/images/fisherman_intro.jpg" width="300" height="150"></a>
            <h2>Fisherman Bedroom</h2>
            <p> Full capacity: 3 persons, 1 Double Bunk, 1Bed Sofa, Individual reading lights, Individual safe box, Linen and towels included, Free Internet Wi-Fi, Breakfast included </p>
            <p><a href="<?php bloginfo('siteurl'); ?>/fisherman-bedroom/" title="fisherman-bedroom" class="btn">View details &raquo;</a></p>
          </div>
        </li>
        <!-- /.span3 -->
        <li class="span3 intro">
			<div><a href="<?php bloginfo('siteurl'); ?>/haliotis-bedroom/"> <img src="<?php bloginfo('template_directory'); ?>/images/haliotis_intro.jpg" width="300" height="150"></a>
            <h2>Haliotis Bedroom</h2>
            <p> Full Capacity: 2 persons, 2 twin beds, Wardrobe, Individual reading lights, Individual safe box, Linen and towels included, Free Internet Wi-Fi, Breakfast included </p>
            <p><a href="<?php bloginfo('siteurl'); ?>/haliotis-bedroom/" title="haliotis-bedroom" class="btn">View details &raquo;</a></p>
          </div>
        </li>
        <!-- /.span3 -->
      </ul>
    </div>
    <!-- /.row -->
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <div class="row">
      <div class="span8">
        <!--//testtemunhos-->
        <div class="avis">
          <h2> Testimoniales</h2>
          <h5 class=""> What Guests are saying: </h5>
			<p class="subtitle">	LOVELY PEOPLE - AMAZING EXPERIENCES</p>
        </div>
        <?php
        $args = [
          'post_type' => 'testemunhos',
          'posts_per_page' => 3,
          'paged' => get_query_var('paged'),

        ];
        // the query
        $query_testemunhos = new WP_Query($args); ?>
        <!-- the loop -->
        <?php if ($query_testemunhos->have_posts()) : ?>
          <?php while ($query_testemunhos->have_posts()) : $query_testemunhos->the_post(); ?>

            <div class="avis">
              <h4> <span class="dashicons dashicons-admin-users person"></span> <?php echo get_field("nome") ?></h4>
              <p><img src="<?= site_testemunhos(get_field("site")) ?>" alt="<?= get_field("site") ?>"> - <small><?= get_field("data") ?></small></p>
              <p class="text_hosp">"<?php echo get_field("testemunho") ?>"</p>
            </div>

          <?php endwhile; ?>
          <!-- end of the loop -->
          <?php $count = wp_count_posts( 'testemunhos' )->publish;
          if ($count > 3) : ?>
            <p class="aling-d"> <a href="<?php bloginfo('siteurl'); ?>/testemunhos" title="more testimonials">More testimonials »</a></p>
          <?php endif; ?>


          <!-- pagination here -->

          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

        <!--/location/-->

        <hr>
        <h2> Location<a name="local"></a></h2>
        <p>Rua Salvador Franco n&ordm; 40, Peniche - Portugal <a class="btn btn-small" href="http://goo.gl/maps/istfk"><i class="icon-map-marker"></i><strong>How to arrive ?</strong></a></p>
        <div id="map" class="">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1297.0762582674515!2d-9.380139204350465!3d39.35658466752917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1f45e2bc2d00d9%3A0x81d605ed7fb1c7b7!2sR.%20Salvador%20Franco%2040%2C%202520-205%20Peniche!5e0!3m2!1spt-PT!2spt!4v1596659342994!5m2!1spt-PT!2spt" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>

      </div>
      <div class="span4">
        <p class="text-center"><img src="<?php bloginfo('template_directory'); ?>/images/logo_sidebar.jpg" alt="Swordfish Hostel" width="305" height="250" /></p>
        <h3>Weather Peniche</h3>
        <?php include('includes/tempo.php'); ?>
        <div class="hidden-phone">
          <h4>Facebook </h4>
          <div class="fb-page" data-href="https://www.facebook.com/Swordfish.ecohouse/" data-tabs="" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
            <blockquote cite="https://www.facebook.com/Swordfish.ecohouse/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Swordfish.ecohouse/">SwordFish Eco-House Peniche</a></blockquote>
          </div>

        </div>

        <hr class="featurette-divider">
		   <h4> Infos</h4>
        <?php  echo do_shortcode('[listmenu menu=menu_infos menu_class="nav nav-tabs nav-stacked" container=ul]');?>
		  
        <hr class="featurette-divider">
        <div class="pay">
          <p>SwordFish Eco-House accept payments Paypal e Moneybookers-Skrill</p>
        </div>
		  
      </div>
    </div>
    <hr class="featurette-divider">
  </div>
  <!-- /.container -->
  <!-- FOOTER -->
  <?php include('footer.php'); ?>