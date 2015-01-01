<?php /* Template Name: Home Page */ ?>

<?php
/**
 * @package SkylarWuebker2
 */

get_header(); ?>


<section id="main" class="content col-xs-12">
	<div class="window row">
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
	</div>
</section>

<?php get_footer(); ?>