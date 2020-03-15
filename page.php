<?php
	/**
		template Name: full-with

		@package wordpress
		@subpackage Tech Developer
		@since Tech Developer 1.0
	*/

		get_header();
		?>

		<div class="row">
			<div class="col-lg-12 content-page">
				<?php
				if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="row"> <h1 class="title-post"> <?php the_title(); ?> </h1> </div>
					<div class="row"> <?php the_content(); ?> </div>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>



	<?php get_footer(); ?>