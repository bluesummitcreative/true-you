<div class="container-fluid home-testimonials">
	<div id="carouselExample" class="carousel slide container" data-ride="carousel" data-interval="5000">
		<div class="carousel-inner row w-100 mx-auto" role="listbox">

	<?php
		// WP_Query arguments
		$args = array(
			'post_type'              => array( 'testimonials' ),
			'post_status'            => array( 'publish' ),
		);

		$query_testimonials = new WP_Query( $args );
		
		$c = 0;
					
		

		if ( $query_testimonials->have_posts() ) {
			while ( $query_testimonials->have_posts() ) {
				$query_testimonials->the_post(); 
				$c++;
				if ( $c == 1 ){ $active_class = ' active';}
				else{ $active_class = '';} 
			?>
			<div class="carousel-item col-sm-3<?php echo $active_class; ?>">
				<div class="testimonial">					
						<img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=<?php echo $c; ?>" alt="slide <?php echo $c; ?>">
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
				</div>
				
			</div>

		<?php }} else {} wp_reset_postdata(); ?>
		
		</div>
		<!--<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
		    <i class="fa fa-chevron-left fa-lg text-muted"></i>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
		    <i class="fa fa-chevron-right fa-lg text-muted"></i>
		    <span class="sr-only">Next</span>
		</a>-->
	</div>
</div>
