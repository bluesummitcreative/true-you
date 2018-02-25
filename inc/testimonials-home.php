<div class="container-fluid">
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
			<div class="slide-item">
				<div class="inner-box">
					<div class="slide-header">
						<figure class="author-thumb"><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
						<h4><?php the_title(); ?></h4>
					</div>
					<div class="slide-content"><?php the_content(); ?></div>
				</div>
			</div>

		<?php }} else {} wp_reset_postdata(); ?>
		
		</div>
	</div>
</div>
