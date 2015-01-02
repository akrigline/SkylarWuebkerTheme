<?php
/* 
Template Name: Contact
*/
?>
<?php get_header();?>


<?php query_posts('category_name=Contact');?>
<?php if (have_posts()) : ?>
    
    	<?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                
		<?php endwhile; ?>
	<?php else :?>
    	
        <h2 Not Found</h2>
    	<p> Sorry, But you're looking for something that isn't here.</p>
    
	<?php endif;?>
</div><!--Container-->

<?php get_footer();?>
