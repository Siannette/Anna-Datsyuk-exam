<?php get_header(); ?>
<?php get_sidebar(); ?>
	<div class="content">
<?php
if ( have_posts() ) {
	while ( have_posts() ) {

		the_post(); ?>
		<div class="news">
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<p class="post"><?php the_content(); ?></p>
			<span class="author"><?php the_author(); ?></span>
		</div>

	<?php } 
} ?> 

	<?php wp_reset_query(); ?>

<?php get_footer(); ?>