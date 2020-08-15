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
  <h2>SwordFish Eco-House </h2>
      <p> Surf Camp Peniche - Portugal</p>
  </div>
</div>
<!--///header-->
<div class="container">
  <div id="nav" class="pagination"> </div>
  <div class="row">
    <div class="span8">
      <div class="postmeta"> <a href="<?php bloginfo('siteurl');?>" title="<?php bloginfo('name');?>" class="author"> Home </a> &raquo; <span class="categori">
      Testimoniales </span> </div>
      <?php if ( have_posts() ) : ?>
        <header>
        <h2> Testimoniales</h2>
          <p class="subtitle"> What Guests are saying: LOVELY PEOPLE - AMAZING EXPERIENCES</p>
        </header>
      </header>
      <?php while ( have_posts() ) : the_post(); ?>
    
      <article>
      
        <div class="entry-content">
        <div class="avis">
          <h4> <span class="dashicons dashicons-admin-users person"></span> <?php echo get_field( "nome" ) ?></h4>
			<p><img src="<?=site_testemunhos(get_field("site"))?>" alt="<?=get_field("site")?>"> - <small><?= get_field("data") ?></small></p>
          <p class="text_hosp">"<?php echo get_field( "testemunho" ) ?>"</p>
          </div>
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