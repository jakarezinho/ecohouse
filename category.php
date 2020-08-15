<?php include ('header.php');?>
<!--head//-->
<body <?php body_class(); ?>>
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
      <div class="postmeta"> <a href="<?php bloginfo('siteurl');?>" title="<?php bloginfo('name');?>" class="author"> Home </a> &raquo; <span class="categori">Categorias:
        <?php the_category(', '); ?>
        </span> </div>
      <?php if ( have_posts() ) : ?>
      <header>
        <h2>
          <?php  echo single_cat_title( '', false );?>
        </h2>
      </header>
      <?php while ( have_posts() ) : the_post(); ?>
      <hr>
      <article>
        <header>
          <h3 class="blog_h3"> <a href ="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
            </a> &raquo;</h3>
        </header>
        <p class="postmeta">
          <?php the_time(' j, F,  Y') ?>
          -
          <?php the_category(' + '); ?>
        </p>
        <div class="entry-content">
          <?php the_content('<p class="vermais">VIEW MORE..&raquo;</p>'); ?>
        </div>
      </article>
      <?php  endwhile; endif;?>
      <div class="navigation">
        <?php posts_nav_link(' &#183; ', '<p class="btn btn-primary"> &laquo; previous page </p>', ' <p class="btn btn-primary pull-right">Next page &raquo;</p>'); ?>
      </div>
    </div>
    <!--asid-->
    <?php include ('includes/sidebar.php');?>
  </div>
</div>
<!-- /container -->
<?php include ('footer.php');?>