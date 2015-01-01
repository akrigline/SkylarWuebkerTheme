<?php
/**
 * @package SkylarWuebker2
 */
?>

<?php $postID = get_the_ID(); ?>

<li class="tile web">
	<a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="<?php echo $post->post_name;?>" class="fancybox fancy-image" data-title-id="<?php echo $postID; ?>">
		<img src="photos/tiles/crystal_tile.png" alt="">
	</a>
	
	<div id="<?php echo $postID; ?>" class="sr-only">
		<h1><?php the_title();?></h1>
		<p><?php the_content(); ?></p>
	</div>

	<a href="photos/tiles/crystal_tile.png" rel="<?php echo $post->post_name;?>" class="fancybox sr-only" data-title-id="<?php echo $postID; ?>">
		<img src="photos/tiles/crystal_tile.png" alt="">
	</a>
	
</li>


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
		$attachmentimage = wp_get_attachment_image_src( $image->ID, full );
		$imageDescription = apply_filters( 'the_description' , $image->post_content );
		$imageTitle = apply_filters( 'the_title' , $image->post_title );

		if (!empty($imageDescription)) {
			echo '<a href="'.$imageDescription .'"><img src="' . $attachmentimage[0] . '" alt=""  /></a>';
		} else { echo '<img src="' . $attachmentimage[0] . '" alt="" />'; }
	}
} else {
	echo "No Image";
}

?>