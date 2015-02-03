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
<div class="clear"></div>
<div class="reach">
<h4>Also get connected with me.</h4>
<div class="social col-xs-12 col-xs-offset-1 col-sm-6 col-sm-offset-4">
<a target="blank" href="https://www.facebook.com/Skywueb"><div class="facebook col-xs-3 col-sm-4"></div></a>
<a target="blank" href="http://www.linkedin.com/in/skylarwuebker/"><div class="linkedin col-xs-3 col-xs-offset-1 col-sm-4 col-sm-offset-1"></div></a>
<a target="blank" href="http://designspiration.net/swuebker/"><div class="designsperation col-xs-3 col-xs-offset-1 col-sm-4 col-sm-offset-1"></div></a>
<a target="blank" href="https://www.github.com/wuebkers"><div class="github col-xs-3 col-xs-offset-1 col-sm-4 col-sm-offset-1"></div></a>
</div>
</div>
</div>
</div>
</section>
                
		<?php endwhile; ?>
	<?php else :?>
    	
        <h2 Not Found</h2>
    	<p> Sorry, But you're looking for something that isn't here.</p>
    
	<?php endif;?>
</div><!--Container-->

<?php get_footer();?>
