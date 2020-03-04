<?php 
	add_action('wp_enqueue_scripts', 'style_theme');
	add_action('wp_footer', 'scripts_theme');
	add_action( 'after_setup_theme', 'theme_register_nav_menu');
	add_action( 'widgets_init', 'register_my_widgets');
	function style_theme(){
		wp_enqueue_style( 'style', get_stylesheet_uri());
		wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css');
		wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css');
		wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
	}
	function scripts_theme(){
		wp_enqueue_script('init',get_template_directory_uri() . '/assets/js/init.js');
		wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js');
		wp_enqueue_script('jquery.flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js');
		wp_enqueue_script('jquery-migrate-1.2.1.min', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js');
		wp_enqueue_script('jquery');

	}
	function theme_register_nav_menu(){
		register_nav_menu( 'topMenu', 'Навігація в хедері');
	}
	function register_my_widgets(){
		register_sidebar( array(
		'name'          => 'Right Sidebar',
		'id'            => "right_sidebar",
		'description'   => 'Правий сайдбар',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n"
	) );
	}
?>