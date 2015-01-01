<?php
/**
 * @package SkylarWuebker2
 */
?>

<?php 
	$postID = get_the_ID();
	$args = array( 'child_of' => 3 );
	$categories = get_categories ( $args );
?>

<li class="tile <?php echo $categories; ?>">
	<a href="<?php the_post_thumbnail('full'); ?>" title="Open Project in Lightbox" rel="<?php echo $post->post_name;?>" class="fancybox fancy-image" data-title-id="<?php echo $postID; ?>">
		<img src="<?php the_post_thumbnail(); ?>" alt="<?php the_post_thumbnail('alt');?>">
	</a>
	
	<div id="<?php echo $postID; ?>" class="sr-only">
		<h1><?php the_title();?></h1>
		<p><?php the_content(); ?></p>
	</div>

	<?php
		$thumb_ID = get_post_thumbnail_id( $post->ID );
		if ( $images = get_posts(array(
			'post_parent' => $post->ID,
			'post_type' => 'attachment',
			'numberposts' => -1,
			'post_mime_type' => 'image',
			'exclude' => $thumb_ID,)))
		{
			foreach( $images as $image ) {
				$attachmenturl = wp_get_attachment_url( $image->ID );
				$attachmentimage = wp_get_attachment_image_src( $image->ID, thumbnail );
				$attachmentalt = wp_get_attachment_image( $image->ID, 'alt' );

				echo '<a href="' . $attachmenturl . '" rel="' . $post->post_name . '" class="fancybox sr-only" data-title-id="' . $postID . '"><img src="' . $attachmentimage[0] . 'alt="' . $attachmentalt . '"></a>';

				}
			} else {
		}

	?>
	
</li>
