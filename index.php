<?php
get_header();
?>

<!-- Start Container -->
<div class="row">
	<div class="col-lg-12">
		<?php 
		if ( have_posts() ) : 
			while ( have_posts() ) : the_post(); 
				?>
				<div class="col-lg-4">
					<div class="card">
						<?php
						if(get_the_post_thumbnail_url() != ''){
							?> <a href="<?php echo get_post_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="..."></a> <?php
						}
						?>
						<div class="card-body">
							<a href="<?php echo get_post_permalink(); ?>" class="link-title"><h5 class="card-title"><?php the_title(); ?></h5></a>
							<p class="card-text"><?php the_excerpt(); ?></p>
							<p class="card-category"> <?php the_category(); ?> </p>
							<a href="#" class="link-date"> <p class="text-date"> <?php the_date(); ?> - <?php the_time(); ?> </p> </a>
							<a href="<?php echo get_post_permalink(); ?>" class="btn btn-outline-primary button-card">Read More...</a>
						</div>
					</div>
				</div>
			</div>
			<?php
		endwhile; 
		?> </div> <?php
		?>
		<div class="row">
			<?php the_posts_pagination(); ?>
		</div>
		<?php
	endif; 
	?>

	<?php
	get_footer();