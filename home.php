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



<section id="main" class="content col-xs-12">
    <div class="window row">
        <ul class="items list-unstyled">
            <li class="tile web">
                <a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project1" class="fancybox fancy-image" data-title-id="title-1"><img src="photos/tiles/crystal_tile.png"></a>
                <div id="title-1" class="sr-only">
                    <h1>TITLE</h1>
                    This is 1st title.
                </div>




                <a href="photos/tiles/crystal_tile.png" title="Second Project in Lightbox" rel="project1" class="fancybox sr-only"><img src="photos/tiles/crystal_tile.png"></a>
                <a href="photos/tiles/crystal_tile.png" title="Second Project in Lightbox" rel="project1" class="fancybox sr-only"><img src="photos/tiles/crystal_tile.png"></a>
                <a href="photos/tiles/crystal_tile.png" title="Second Project in Lightbox" rel="project1" class="fancybox sr-only"><img src="photos/tiles/crystal_tile.png"></a>

            </li>
            <li class="tile print"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project2" class="fancy-image fancybox"><img src="photos/tiles/nick_tile.png"></a></li>
            <li class="tile identity"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project3" class="fancy-image fancybox"><img src="photos/tiles/cultural_tile.png"></a></li>
            <li class="tile web"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project4" class="fancy-image fancybox"><img src="photos/tiles/black_male_tile.png"></a></li>
            <li class="tile web"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project5" class="fancy-image fancybox"><img src="photos/tiles/hothead_tile.png"></a></li>
            <li class="tile identity"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project6" class="fancy-image fancybox"><img src="photos/tiles/unity_tile.png"></a></li>
            <li class="tile print"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project7" class="fancy-image fancybox"><img src="photos/tiles/facade_tile2.png"></a></li>
            <li class="tile print"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project8" class="fancy-image fancybox"><img src="photos/tiles/mason_tile.png"></a></li>
            <li class="tile print"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project9" class="fancy-image fancybox"><img src="photos/tiles/menu_tile.jpg"></a></li>
        </ul>
    </div>
</section>