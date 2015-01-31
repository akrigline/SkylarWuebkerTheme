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
		<div class="pitch col-xs-12 col-sm-12 col-md-5 col-lg-5 col-lg-offset-1">
			<h4>Hello, I'm Skylar Wuebker</h4>
			<p>With working with large companies, as well as becoming a sought after freelance designer, I understand the importance with client relations as well how important perfection is when handling any client media. Currently a front end developer at <a target="_blank" href="http://www.216digital.com">216 Digital</a>, my range of design is quite diverse, spanning from page and web layouts to environmental graphics used in stadiums and tradeshow booths. You can preview these projects at <a target="_blank" href="http://www.fortyninedegrees.com">fortyninedegrees.com</a>. As a young professional in the field I have become highly recognizable for my excellence by The University of Akron, as well as the work I have done within the community. In addition to completing my Bachelors of Fine Arts and maintaining a 3.0 GPA, I have also co-founded an organization of young design professionals offering freelance work to local businesses. You can preview projects that I have been a part of locally at <a target="_blank" href="http://www.creative-folk.com">creative-folk.com</a>. Currently located in Akron Ohio, I am available for any design and advertising work you may have. Available for travel worldwide.</p>
		</div>

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