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
									<img src="/wp-content/uploads/footer-logo.png" class="img-responsive" alt="" />
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
												<?php wp_list_pages('title_li=&include=39,43,40,41,42&sort_column=menu_order'); ?>
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
							<div class="footer-widget contact-widget">
								<h2>Contact Us</h2>
								<div class="widget-content">
									<ul class="contact-info">
										<li><span class="icon flaticon-telephone-1"></span><strong>Phone:</strong> (970) 227-2806</li>
										<li><span class="icon flaticon-interface-4"></span><strong>Email:</strong> mbyprogram@gmail.com</li>
										<li><span class="icon flaticon-location"></span><strong>Address:</strong> 1606 S. Lemay Ave, Suite 102, Fort Collins, CO 80525</li>
									</ul>

								</div>
							</div>

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
										<?php // echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

			 </div>
		 </div>

	</div>

	<!--Footer Bottom-->
	 <div class="footer-bottom">
		<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left"><div class="copyright"><?php dynamic_copyright(); ?></div></div>
				<div class="pull-right">
					<ul class="footer-social">
						<?php if( have_rows('social_media_links', 'option') ): while( have_rows('social_media_links', 'option') ): the_row(); ?>
						<li><a href="<?php the_sub_field('link'); ?>" target="_blank"><i class="fab <?php the_sub_field('icon'); ?>" aria-hidden="true"></i></a></li>
						<?php endwhile; endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-angle-up"></span></div>



				<?php if ( is_page('39')) { ?>
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content" style="background:gray;">
							
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">6-Week Program</h4>
							</div>
							
							<div class="modal-body">
								<?php echo do_shortcode('[gravityform id="4" title="false" description="false" ajax="true"]'); ?>
							</div>
							
							<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  	</div>
						</div>
					</div>
				</div>
				<?php } elseif ( is_page('40')) { ?>
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content" style="background:gray;">
							
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Fitness, Yoga, & Brews Class</h4>
							</div>
							
							<div class="modal-body">
								<?php echo do_shortcode('[gravityform id="9" title="false" description="false" ajax="true"]'); ?>
							</div>
							
							<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  	</div>
						</div>
					</div>
				</div>
				<?php } elseif ( is_page('42')) { ?>
		  		<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content" style="background:gray;">
							
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Yoga & Mindfulness</h4>
							</div>
							
							<div class="modal-body">
								<?php echo do_shortcode('[gravityform id="10" title="false" description="false" ajax="true"]');  ?>
							</div>
							
							<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  	</div>
						</div>
					</div>
				</div>
				<?php } else { } ?>



<?php wp_footer(); ?>
</body>
</html>
