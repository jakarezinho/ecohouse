<?php

require_once 'includes/Mobile_Detect.php';

//// POST TYPE TESTEMUNHOS ///
function register_testemunhos()
{


    register_post_type('testemunhos', [
        'label' => 'Testemunhos',
        'labels' => [
            'add_new' => 'Novo testemunho',
            'add_new_item ' => ' Adicionar Novo testemunho',
            'edit_item' => 'Editar testemunho',
            'new_item' => 'novo testemunho',
            'singular_name' => 'testemunho',
        ],
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-businessperson',
        'supports' => ['title', 'thumbnail', 'custom-fields'],
        'show_in_rest' => false,
        'has_archive' => true,


    ]);
}


add_action('init', 'register_testemunhos');

///SETUP//////
function theme_setup()
{
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_image_size('slide', 980, 500, true);

    ///taille content////
    if (!isset($content_width)) $content_width = 550;
	add_theme_support( 'responsive-embeds' );

    // Title tag
    add_theme_support('title-tag');
    //remove wp version
    remove_action('wp_head', 'wp_generator');
}

/////REGISTER MENUS////
if (!function_exists('eco_house_menus')) :
    function eco_house_menus()
    {

        // Register menus
        $locations = array(
            'top_nav' => __('Top_nav'),
            'menu_room_facilities' => __('Menu room facilities'),
            'menu_infos' => __('Men infos'),
            'menu_footer' => __('Menu footer'),
        );

        register_nav_menus($locations);
    }
    add_action('init', 'eco_house_menus');
endif;

add_action('after_setup_theme', 'theme_setup');


//////SETUP STYLES ///////
if (!function_exists('eco_house_register_styles')) :
    function eco_house_register_styles()

    {
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', 'all');
        wp_enqueue_style('bootstrap_responsive', get_template_directory_uri() . '/bootstrap/css/bootstrap-responsive.css', 'all');
		wp_enqueue_style('dashicons-css', get_bloginfo('url') . '/wp-includes/css/dashicons.min.css');
		if(!is_home()){
			wp_enqueue_style('maghifique_pop', get_bloginfo('template_url') . '/js/magnifique_pop/magnific-popup.css');}
		
        wp_enqueue_style('eco_house_style', get_template_directory_uri() . '/style.css', 'all');
    }
    add_action('wp_enqueue_scripts', 'eco_house_register_styles');
endif;

////SETUP SCRIPTS/////
if (!function_exists('eco_house_register_scripts')) :
    function eco_house_register_scripts()
    {

        wp_enqueue_script('bootstrap', get_bloginfo('template_url') . '/bootstrap/js/bootstrap.js', array('jquery'));

        wp_enqueue_script('intro', get_bloginfo('template_url') . '/js/intro.js', array('jquery'));
		
		if(!is_home()){
			wp_enqueue_script('maghifique_pop', get_bloginfo('template_url') . '/js/magnifique_pop/jquery.magnific-popup.js', array('jquery'));
		}

      

        if (is_singular() && get_option('thread_comments'))
            wp_enqueue_script('comment-reply');
    }
    add_action('wp_enqueue_scripts', 'eco_house_register_scripts');
endif;
//// SHORT CODE MENU ///[listmenu menu=Sitemap menu_class=sitemap_menu]////

function list_menu($atts, $content = null) {
	extract(shortcode_atts(array(  
		'menu'            => '', 
		'container'       => 'div', 
		'container_class' => '', 
		'container_id'    => '', 
		'menu_class'      => 'menu', 
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'depth'           => 0,
		'walker'          => '',
		'theme_location'  => ''), 
		$atts));
 
 
	return wp_nav_menu( array( 
		'menu'            => $menu, 
		'container'       => $container, 
		'container_class' => $container_class, 
		'container_id'    => $container_id, 
		'menu_class'      => $menu_class, 
		'menu_id'         => $menu_id,
		'echo'            => false,
		'fallback_cb'     => $fallback_cb,
		'before'          => $before,
		'after'           => $after,
		'link_before'     => $link_before,
		'link_after'      => $link_after,
		'depth'           => $depth,
		'walker'          => $walker,
		'theme_location'  => $theme_location));
}
//Create the shortcode
add_shortcode("listmenu", "list_menu");

//// LOGIN LOGO//////

function my_login_logo_url()
{
    return get_bloginfo('url');
}
add_filter('login_headerurl', 'my_login_logo_url');

//changing the login page URL hover text

function my_login_logo_url_title()
{
    return get_bloginfo('title');
}
add_filter('login_headertitle', 'my_login_logo_url_title');

////LOGO////
function meu_logo_login()
{
    echo '<style  type="text/css">  .login h1 a {  background-image:url(' . get_bloginfo('template_directory') . '/images/logo_mini.png)  !important;  background-size: 80px 63px !important; height:63px !important; width: 80px !important;} </style>';
}
add_action('login_head',  'meu_logo_login');
/////////////

/////IMAGE TESTEMUNHOS 

function site_testemunhos($site)
{
    if ($site == 'Booking') {
        return  bloginfo('template_directory') . '/images/booking.png';
    } elseif ($site == 'Airbnb') {
        return  bloginfo('template_directory') . '/images/airbnb.jpg';
    } elseif ($site == 'Facebook') {
        return  bloginfo('template_directory') . '/images/facebook.png';
    } else {
        return  '';
    }
}
///// notification email 
add_filter( 'admin_email_check_interval', '__return_false' );


