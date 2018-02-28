<?php 

$image = get_field('section_banner') class="img-fluid";
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

	echo wp_get_attachment_image( $image, $size );

}

?>



