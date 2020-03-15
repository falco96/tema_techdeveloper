<?php
require_once(get_template_directory() .'/wp_bootstrap_navwalker.php');

if(!function_exists('techdeveloper_setup')){
	function techdeveloper_setup(){
		add_theme_support('title_tag');
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size(1920,1080);

		function themename_custom_logo_setup() {
		 $defaults = array(
		 'height'      => 32,
		 'width'       => 32,
		 'flex-height' => true,
		 'flex-width'  => true,
		 'header-text' => array( 'site-title', 'site-description' ),
		 );
		 add_theme_support( 'custom-logo', $defaults );
		}
		add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

		register_nav_menus(
			array(
				'primaryMenu' => __('Primary', 'techDeveloper'),
				'footerMenu' => __('Footer Menu', 'techDeveloper')
			)
		);


		add_theme_support('html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'style',
			'script',
			'gallery',
			'caption'
		)
	);

	add_theme_support('custom_logo',
		array(
			'height' => 32,
			'width' => 32,
			'flex-height' => false,
			'flex-width' => false
		)
	);

	add_theme_support('customize-selective-refresh-widgets');

	add_theme_support('wp-block-styles');

	add_theme_support('align-wide');

	add_theme_support('editor-styles');

	add_theme_support('style-editor.css');




	}
}
add_action('after_setup_theme', 'techdeveloper_setup');


		register_sidebar( array(
			'name'          => __( 'Main Sidebar', 'TechDeveloper' ),
			'id'            => 'sidebar1',
			'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'TechDeveloper' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Sidebar', 'TechDeveloper' ),
			'id'            => 'sidebar2',
			'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'TechDeveloper' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
		) );
	

if(!function_exists('techDeveloper_enqueue_styles')){
	function techDeveloper_enqueue_styles(){
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

		wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . "/assets/css/bootstrap.min.css");
		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js');
		wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
		wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . "/assets/js/bootstrap.min.js");
	}
}

function set_image_thumbnail(){
	?>
	<style type="text/css">
		<?php
		if(is_single() && has_post_thumbnail()){
			$featured = get_the_post_thumbnail_url();
		}
		else if(is_page() && has_post_thumbnail()){
			$featured = get_the_post_thumbnail_url();
		}
		else{
			$featured = get_template_directory_uri() . "/assets/img/background-jumbotron.jpg";
		}
		?>
		nav{
		background-image: url(<?php echo $featured; ?>), linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8));
		background-attachment: fixed;
		background-size: cover;
	}
	.jumbotron{
	background-image: url(<?php echo $featured; ?>), linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8));
	background-attachment: fixed;
	background-size: cover;
	color: white;
	text-align: center;	
	height: 100vh;
}

body{
	background-image: url(<?php echo $featured; ?>);
	background-attachment: fixed;
	background-size: cover;
}
</style>
<?php
}


?>