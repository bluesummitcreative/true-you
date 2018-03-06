<?php
	// Register Sidebars
	
	function custom_sidebars() {
		register_sidebar( 
			array(
				'name' => __('Default Page Sidebar'),
				'id' => 'sidebar-1',
				'before_widget' => '<div class="widget">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Blog Sidebar'),
				'id' => 'sidebar-2',
				'before_widget' => '<div class="widget">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Footer Widget 1'),
				'id' => 'footer-widget-1',
				'before_widget' => '<div class="footer-column col-md-6 col-sm-6 col-xs-12"><div class="footer-widget about-widget">
								<div class="widget-content">',
				'after_widget' => '</div>
							</div>
						</div>',
				'before_title' => '<h2>',
				'after_title' => '</h2>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Footer Widget 2'),
				'id' => 'footer-widget-2',
				'before_widget' => '<div class="footer-column col-md-6 col-sm-6 col-xs-12">
							<div class="footer-widget links-widget">
								<div class="widget-content">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">',
				'after_widget' => '</div>
									</div>
								</div>
							</div>',
				'before_title' => '<h2>',
				'after_title' => '</h2>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Footer Widget 3'),
				'id' => 'footer-widget-3',
				'before_widget' => '<div class="footer-column col-md-6 col-sm-6 col-xs-12">
							<div class="footer-widget posts-widget">
								<div class="widget-content">
									<div class="posts"> ',
				'after_widget' => '</div>
								</div>
							</div>
						</div>',
				'before_title' => '<h2>',
				'after_title' => '</h2>',
				)
		);
		
		register_sidebar( 
			array(
				'name' => __( 'Footer Widget 4'),
				'id' => 'footer-widget-4',
				'before_widget' => '<div class="footer-column col-md-6 col-sm-6 col-xs-12">
							

							<div class="footer-widget newsletter-widget">
								<div class="widget-content">',
				'after_widget' => '</div>
							</div>

						</div>',
				'before_title' => '<h2>',
				'after_title' => '</h2>',
				)
		);
		
	}
	add_action( 'widgets_init', 'custom_sidebars' );
?>
