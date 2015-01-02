<?php
/**
 * @package SkylarWuebker2
 */
?>

<?php 
	$postID = get_the_ID();
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );
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
	<?php   $images = get_children(array(
			'exclude' => get_post_thumbnail_id(),
			'post_parent' => $post->ID,
			'post_type' => 'attachment',
			'post_mime_type' => 'image',
			'numberposts' => -1 ));

		$last_key = end($images);
		foreach ($images as $image) {
			$attachmenturl = wp_get_attachment_url( $image->ID );
			$attachmentimage = wp_get_attachment_image_src( $image->ID, thumbnail );
			$attachmentalt = wp_get_attachment_image( $image->ID, 'alt' );
		    if ($image == $last_key) { ?>

				<a href="<?php echo $attachmenturl; ?>" title="Open Project in Lightbox" rel="<?php echo $postID; ?>" class="fancybox fancy-image" data-title-id="<?php echo $postID; ?>">
					<img src="<?php echo $thumb[0]; ?>" alt="">
				</a>

			<?php } else {

				echo '<a href="' . $attachmenturl . '" rel="' . $postID . '" class="fancybox sr-only" data-title-id="' . $postID . '"><img src="' . $attachmentimage[0] . '" alt="' . $attachmentalt . '"></a>';
		    
		    }
		}

	?>
	<div id="<?php echo $postID; ?>" class="sr-only">
		<h2><?php the_title();?></h2>
		<p><?php the_excerpt(); ?></p>
	</div>
	
</li>