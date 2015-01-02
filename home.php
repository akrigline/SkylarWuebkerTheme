<?php /* Template Name: Home Page */ ?>

<?php
/**
 * @package SkylarWuebker2
 */

get_header(); ?>


<section id="main" class="content col-xs-12">
	<div class="window">
	<?php query_posts( array ( 'category_name' => 'work', 'posts_per_page' => -1 ) ); ?>
		<?php if ( have_posts() ) : ?>
			<ul class="items list-unstyled">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

			</ul><!-- /items -->

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</section>

<?php get_footer(); ?>