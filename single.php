<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 <div class="row single-post-row">
 <div class="col-sm-8 content-post">
 	<div class="row"> <h1 class="title-post"> <?php the_title(); ?> </h1> </div>
 	<div class="row"> <?php the_content(); ?> </div>
 	<div class="row comments"> <?php comments_template(); ?> </div>
 </div>
 <div class="col-sm-4 sidebar">
 	<?php get_sidebar('sidebar1'); ?>
 </div>
</div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
