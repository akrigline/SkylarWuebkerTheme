<?php
/**
 * @package SkylarWuebker2
 */
?>

<?php 
	$postID = get_the_ID();
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	$categories = get_the_category();
	$separator = ' ';
	$classes = '';
	if($categories){
	   foreach($categories as $category) {
	      $classes .= $category->cat_name.$separator;
	   }
	}
?>

<li class="tile <?php echo trim($classes, $separator); ?>">
	<a href="<?php echo $thumb[0]; ?>" title="Open Project in Lightbox" rel="<?php echo $post->post_name;?>" class="fancybox fancy-image" data-title-id="<?php echo $postID; ?>">
		<img src="<?php echo $thumb[0]; ?>" alt="">
	</a>
	
	<div id="<?php echo $postID; ?>" class="sr-only">
		<h1><?php the_title();?></h1>
		<p><?php the_excerpt(); ?></p>
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

<?php

?>