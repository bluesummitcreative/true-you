<footer class="main-footer">
	<div class="auto-container">

		<!--Widgets Section-->
		<div class="widgets-section">
			<div class="row clearfix">
				<!--Big Column-->
				<div class="big-column col-md-6 col-sm-12 col-xs-12">
					<div class="row clearfix">

						<!--Footer Column-->
						<?php
							if ( is_active_sidebar( 'footer-widget-1' ) ) : 
								dynamic_sidebar( 'footer-widget-1' ); 
							endif
						?>

						<!--Footer Column-->
						
						<?php
							if ( is_active_sidebar( 'footer-widget-2' ) ) : 
								dynamic_sidebar( 'footer-widget-2' ); 
							endif
						?>
										
					</div>
				</div>

				<!--Big Column-->
				<div class="big-column col-md-6 col-sm-12 col-xs-12">
					<div class="row clearfix">

						<!--Footer Column-->
						<?php
							if ( is_active_sidebar( 'footer-widget-3' ) ) : 
								dynamic_sidebar( 'footer-widget-3' ); 
							endif
						?>

						<!--Footer Column-->
						
						<?php
							if ( is_active_sidebar( 'footer-widget-4' ) ) : 
								dynamic_sidebar( 'footer-widget-4' ); 
							endif
						?>

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
