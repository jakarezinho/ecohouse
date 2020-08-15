<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="brand notranslate" href="<?php bloginfo('siteurl');?>" title="<?php bloginfo('name');?>">SwordFish Eco-House </a>
      <div class="nav-collapse collapse">
        <?php wp_nav_menu(array('theme_location' => 'top_nav',  'depth' => 0, 'container' => false,'menu_class' => 'nav',)); ?>
      </div>
    </div>
  </div>
</div>