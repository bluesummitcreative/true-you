
<?php 

$image = get_field('section_banner');
$size = 'custom'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

	echo wp_get_attachment_image( $image, $size );

}

?>


