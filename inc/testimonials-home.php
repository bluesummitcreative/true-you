<div class="container-fluid home-testimonials">
	<div class="container">
		<div class="row">

	<?php
		// WP_Query arguments
		$args = array(
			'post_type'              => array( 'testimonials' ),
			'post_status'            => array( 'publish' ),
		);

		$query_testimonials = new WP_Query( $args );

		if ( $query_testimonials->have_posts() ) {
			while ( $query_testimonials->have_posts() ) {
				$query_testimonials->the_post(); ?>
			<div class="col-sm-4">
				<div class="testimonial">
					PUT FEATURED IMAGE HERE
					<h4><?php the_title(); ?></h4>
					<div class="testimonial-content"><?php the_content(); ?></div>
				</div>
			</div>

		<?php }} else {} wp_reset_postdata(); ?>
		
		</div>
	</div>
</div>
