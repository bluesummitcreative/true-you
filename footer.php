<footer class="main-footer">
	<div class="auto-container">

		<!--Widgets Section-->
		<div class="widgets-section">
			<div class="row clearfix">
				<!--Big Column-->
				<div class="big-column col-md-6 col-sm-12 col-xs-12">
					<div class="row clearfix">

						<!--Footer Column-->
						<div class="footer-column col-md-6 col-sm-6 col-xs-12">
							<div class="footer-widget about-widget">
								<div class="widget-content">
									<img src="/wp-content/uploads/true-sm.png" class="img-responsive" alt="" />
									<div class="text">It all begins with your desire to shift, to look within, to RELEASE the old stories, thoughts and belief systems, RESET the habits and patterns that are no longer working for you, and RECLAIM yourself and the life you want to LIVE.</div>
								</div>
							</div>
						</div>

						<!--Footer Column-->
						<div class="footer-column col-md-6 col-sm-6 col-xs-12">
							<div class="footer-widget links-widget">
								<h2>Quick Links</h2>
								<div class="widget-content">
									<div class="row clearfix">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<ul>
												<?php wp_list_pages('title_li=&include=56,57,58&sort_column=menu_order'); ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!--Big Column-->
				<div class="big-column col-md-6 col-sm-12 col-xs-12">
					<div class="row clearfix">

						<!--Footer Column-->
						<div class="footer-column col-md-6 col-sm-6 col-xs-12">
							<div class="footer-widget posts-widget">
								<h2>Recent News</h2>
								<div class="widget-content">
									<div class="posts"> 
										<?php global $post; // required
										$args = array('posts_per_page'   => 3,'post_status'      => 'publish');
										$custom_posts = get_posts($args);
										foreach($custom_posts as $post) : setup_postdata($post); ?>
											<div class="post">
												
												<div class="desc-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
												<time class="entry-date posted-info time" datetime="<?php the_time(get_option( 'time_format' )); ?>" itemprop="datePublished" pubdate><?php the_time( get_option( 'date_format' ) ); ?></time>
											</div>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
						</div>

						<!--Footer Column-->
						<div class="footer-column col-md-6 col-sm-6 col-xs-12">
							

							<div class="footer-widget newsletter-widget">
								<h2>Sign Up for Our Newsletter</h2>
								<div class="widget-content">
									<div class="text">Be the first to hear of new programs and specials:</div>
									<!--Newsletter One-->
									<div class="newsletter-one">
										<form method="post" action="https://trueyouinmotion.us9.list-manage.com/subscribe/post">
											<input type="hidden" name="u" value="79bb268d55ad000caf57cd8b5">
    										<input type="hidden" name="id" value="e5ae00c385">
											<div class="form-group">
												<input type="email" name="MERGE0" id="MERGE0" value="" required placeholder="Your Email">
												<button type="submit" class="theme-btn"><span class="fa fa-paper-plane"></span></button>
											</div>
										</form>
										<?php // echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

			 </div>
		 </div>
	</div>
	        <div class="container-fluid socials">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p class="copyright">Copyright &copy <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a<?php if (!is_front_page()) { ?> rel="nofollow"<?php } ?> target="_blank" href="https://www.bluesummitcreative.com/">Website Design by Blue Summit Creative</a> | 
						
						<a target="_blank" href="https://www.facebook.com/TrueYouInMotion/"><i class="fab fa-facebook-square"></i></a>
							
						<a target="_blank" href="https://www.instagram.com/trueyouinmotion/"><i class="fab fa-instagram"></i></a>
							
						</p>
					</div>
				</div>
			</div>
               </div>

</footer>


	<?php wp_footer(); ?>
	<script type="text/javascript">		
		jQuery(document).ready(function($){
		    $('#carouselExample').on('slide.bs.carousel', function (e) {
		    var $e = $(e.relatedTarget);
		    var idx = $e.index();
		    var itemsPerSlide = 4;
		    var totalItems = $('.carousel-item').length;
		    if (idx >= totalItems-(itemsPerSlide-1)) {
			var it = itemsPerSlide - (totalItems - idx);
			for (var i=0; i<it; i++) {
			    // append slides to end
			    if (e.direction=="left") {
				$('.carousel-item').eq(i).appendTo('.carousel-inner');
			    }
			    else {
				$('.carousel-item').eq(0).appendTo('.carousel-inner');
			    }
			}
		    }
		});
		
	
	});
	</script>
	</body>
</html>
