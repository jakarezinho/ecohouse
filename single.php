<?php include ('header.php');?>
<!--head//-->
<body  <?php body_class(); ?>>
	<?php include('includes/google_tag.php');?>
<header>
<!--nav-->
<?php include ('includes/navbar_top.php');?>
<!--//nav-->
</header>
<div class="index_no bois ">
  <div class="container title">
  <h2>Swordfish Hostel </h2>
  <p>Hostel Surf Camp Peniche - Portugal</p>
    </div>
  </div>
<!--///header-->
<div class="container">
<div id="nav" class="pagination"> </div>
  <div class="row">
    <div class="span8">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="postmeta"> <a href="<?php bloginfo('siteurl');?>" title="<?php bloginfo('name');?>" class="author"> Home </a> &raquo; <span class="categori">Category:
      <?php the_category(', '); ?> <?php //  the_tags(__(' &raquo; '), ', '); ?>
      </span>&raquo;
      <?php the_title(); ?>
    </div>
         <?php if ( have_posts() ):?>
			<?php while ( have_posts() ) : the_post(); ?>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
			 <div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="false"></div>
			<hr>

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
        <?php endwhile;?>
		<div class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
    </div><!-- .entry-meta -->
			<h4>
				Share Facebook
			</h4>
			 <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partilhar</a></div>
		  <hr>
   

       <h3>Comments</h3>
      <div id="fb_comments"><div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="600" data-num-posts="1"></div></div>
        <hr>
        <nav id="nav-single"> <span class="nav-previous">
      <?php previous_post_link( '%link', '<span class="meta-nav">' .  '&larr;'. '</span> %title','Previous in category', TRUE ); ?>
      </span> | <span class="nav-next">
      <?php next_post_link( '%link', '%title <span class="meta-nav">' . '&rarr;' . '</span>','Previous in category', TRUE ); ?>
      </span> </nav>
	</article><!-- #post --> 
      <?php endif;?>
    </div>
    <!--asid-->
    <?php include ('includes/sidebar.php');?>
  </div>
</div>

<!-- /container -->
<?php include ('footer.php');?>