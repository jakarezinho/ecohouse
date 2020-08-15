<?php include('header.php'); ?>
<!--head//-->

<body <?php body_class(); ?>>
	<?php include('includes/google_tag.php');?>
  <header>
    <!--nav-->
    <?php include('includes/navbar_top.php'); ?>
    <!--//nav-->
  </header>
  <div class="index_no bois">
    <div class="container title notranslate">
      <h2>SwordFish Eco-House </h2>
      <p> Surf Camp Peniche - Portugal</p>
    </div>
  </div>
  <!--///header-->
  <div class="container">
    <div id="nav" class="pagination"> </div>
    <div class="row">
      <div class="span8">
        <?php echo do_shortcode('[google-translator]'); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php if (have_posts()) : ?>
              <header class="entry-header">
                <h1 class="entry-title">
                  <?php the_title(); ?>
                </h1>
				  <div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="false"></div>
			<hr>
              </header>
			<?php while (have_posts()) : the_post(); ?>
              <div class="entry-content">
                <?php the_content(); ?>
              </div>
              <!-- .entry-content -->
            <?php endwhile; ?>
            <div class="entry-meta">
              <?php edit_post_link(__('Edit', 'twentytwelve'), '<span class="edit-link">', '</span>'); ?>
            </div>
            <!-- .entry-meta -->
           
			<h4>
			  Share facebook
		  </h4>
		  <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partilhar</a></div>
        </article>
        <!-- #post -->
      <?php endif; ?>
      </div>
      <!--asid-->
      <?php include('includes/sidebar.php'); ?>
    </div>
  </div>
  <!-- /container -->
  <?php include('footer.php'); ?>