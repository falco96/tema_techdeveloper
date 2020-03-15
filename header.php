<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title> <?php bloginfo('post-title'); ?> | <?php bloginfo('title'); ?> </title>
	<?php set_image_thumbnail(); ?>

	<?php wp_head(); ?>
	<?php techDeveloper_enqueue_styles(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">

			<img src="http://template.host-falco96.com/wordpress/wp-content/uploads/2020/03/logo-falco96.png" width="32px" height="32px" alt="<?php get_bloginfo('name'); ?>" />
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<?php
			wp_nav_menu( array(
				'menu' => 'techDeveloper',
				'depth' => 2,
				'container' => false,
				'menu_class' => 'navbar-nav mr-auto',
				  //Process nav menu using our custom nav walker
				'walker' => new wp_bootstrap_navwalker())
		);
		?>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
	</nav>

	<!-- Jumbotron -->

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<?php
			if(is_single()){
				if ( have_posts() ) : 
					while ( have_posts() ) : the_post(); 
						?> <h1 class="display-4"> <?php echo the_title(); ?> </h1> <?php
						?> <p class="lead"> <i> <a href="<?php echo get_the_author_link(); ?>"> <?php the_author(); ?> </a> | <?php the_date(); ?> <?php the_time(); ?> </i> </p> <?php
					endwhile; 
				endif;
			}
			else if(is_page()){
				if( have_posts() ) :
					while( have_posts() ) : the_post();
						?> <h1 class="display-4"> <?php echo the_title(); ?> </h1> <?php
						?> <p class="lead"> <i> <a href="<?php echo get_the_author_link(); ?>"> <?php the_author(); ?> </a> | <?php the_date(); ?> <?php the_time(); ?> </i> </p> <?php
					endwhile; 
				endif;	
			}
			else{
				?>
				<h1 class="display-4"><?php blogInfo('post-title'); ?></h1>
				<p class="lead"><?php blogInfo('description'); ?></p>
				<?php
			}
			?>
		</div>
	</div>

	<!-- Start Container -->

	<div class="container-fluid" id="home">