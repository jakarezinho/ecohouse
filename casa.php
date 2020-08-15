<?php
/*
 * Template Name: quartos
 * Description: A Page Template para quarto.
 */
include('header.php'); ?>
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
      <h2>SwordFish Eco-House</h2>
      <p> Surf Camp Peniche - Portugal</p>
    </div>
  </div>
  <!--///header-->
  <div class="container">
    <div class="row">

      <div class="">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <header class="entry-header">
                <div class="nav"> </div>
                <?php echo do_shortcode('[google-translator]'); ?>
                <h1 class="entry-title">
                  <?php the_title(); ?>
                </h1>
				  <div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="false"></div>
                <hr>

              </header>
              <div class="entry-content">
                <?php the_content(); ?>
              </div>
              <!-- .entry-content -->
            <?php endwhile; ?>
            <footer class="entry-meta">
              <?php edit_post_link(__('Edit', 'twentytwelve'), '<span class="edit-link">', '</span>'); ?>
            </footer>
            <!-- .entry-meta -->
            </article>
            <!-- #post -->
          <?php endif; ?>
		  <hr>
		  <h4>
			  Share facebook
		  </h4>
		  <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partilhar</a></div>
		  <hr>

          
          <h3>Comments</h3>
          <div id="fb_comments">
            <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-width="100%"></div>
          </div>

      </div>
      <!--asid-->

    </div>
  </div>
  <!-- /container -->

  <?php include('footer.php'); ?>