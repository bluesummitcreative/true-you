<?php if ( is_home() ) { ?>
<div class="container-fluid page-header" style="background:url(<?php if ( get_field( 'page_header_image', get_option('page_for_posts') ) ): ?><?php the_field('page_header_image', get_option('page_for_posts')); ?><?php else: ?>/wp-content/uploads/cta.jpg<?php endif; ?>) no-repeat;background-size:cover;background-position:center center;">
<?php } else { ?>
<div class="container-fluid page-header" style="background:url(<?php if ( get_field( 'page_header_image' ) ): ?><?php the_field('page_header_image'); ?><?php else: ?>/wp-content/uploads/cta.jpg<?php endif; ?>) no-repeat;background-size:cover;background-position:center center;">
<?php } ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1><?php
					if ( is_home() ) { 
                            echo 'Blog';
                        /*} elseif ( is_404() ) { 
							echo '404 Not Found';*/
						} elseif ( is_search() ) { 
							echo $wp_query->found_posts . ' results found for "' . esc_html( get_search_query( false ) ) .'"';
						
						} else {
							the_title();
						}
				?></h1>
			</div>
		</div>
	</div>
</div>

