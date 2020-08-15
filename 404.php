<?php include ('header.php');?>
<!--head//-->
<body <?php body_class(); ?>>
	<?php include('includes/google_tag.php');?>
<header>
  <!--nav-->
  <?php include ('includes/navbar_top.php');?>
  <!--//nav-->
</header>
<div class="index_no">
  <div class="container title">
    <h2>SwordFish Eco-House</h2>
    <p>Surf Camp Peniche - Portugal</p>
  </div>
</div>
<!--///header-->
<div class="container">
  <div id="nav" class="pagination"> </div>
  <div class="row">
    <div class="span6">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <h1 class="entry-title">404</h1>
        </header>
        <div class="entry-content">
          <h2> No found :(
          </h2> 
        </div>
        <!-- .entry-content -->
      </article>
      <!-- #post -->
    </div>
    <!--asid-->
    <?php include ('includes/sidebar.php');?>
  </div>
</div>
<!-- /container -->
<?php include ('footer.php');?>