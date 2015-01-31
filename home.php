<?php /* Template Name: Home Page */ ?>

<?php
/**
 * @package SkylarWuebker2
 */

get_header(); ?>

<!--
<section id="main" class="content col-xs-12">
	<div class="window">
		<?php query_posts( array ( 'category_name' => 'work', 'posts_per_page' => -1 ) ); ?>
		<?php if ( have_posts() ) : ?>
			<ul class="items list-unstyled">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

			</ul>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</section>-->

<section id="main" class="content col-xs-12">

	<div class="welcome col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="text">
			<h2>Creative Solutions.</h2>
		</div>
	</div>

	<div class="about" data-delay="0" data-animation="fade-in">
		<div class="clearfix"></div>

		<?php query_posts( array ( 'category_name' => 'about', 'posts_per_page' => 1 ) ); ?>

		<?php if ( have_posts() ) : ?>
		
		<div class="pitch col-xs-12 col-sm-12 col-md-5 col-lg-5 col-lg-offset-1">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<h4><?php the_title(); ?></h4>
				<?php the_content(); ?>

			<?php endwhile; ?>

		</div><!-- .pitch -->

		<?php endif; ?>

		<div class="self col-xs-12 col-sm-12- col-md-7 col-lg-6">
		</div>
	</div>
	<div class="location" data-delay="0" data-animation="fade-in">
		<h6>
			From<br>
			<span class="dayton">Dayton</span> - 
			<span class="akron">Akron</span>
		</h6>
	</div>


	<div class="window row" data-delay="0" data-animation="fade-in">    
		<?php query_posts( array ( 'category_name' => 'work', 'posts_per_page' => 6 ) ); ?>

		<?php if ( have_posts() ) : ?>
			
			<ul class="items list-unstyled">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			</ul><!-- items -->

		<?php else : ?>

		<?php endif; ?>
		<?php wp_reset_query(); ?>
		<div class="more">
			<h5><a href="">See More Work</a></h5>
		</div>

	</div>
	<div class="reach" data-delay="0" data-animation="fade-in">
		<h4>Ready to stand out?<div class="button"><a href="contact.html">Get in touch</a></div></h4>
	</div>

	<?php get_footer(); ?>