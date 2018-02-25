
<footer class="footer">
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p class="copyright">Copyright &copy <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a<?php if (!is_front_page()) { ?> rel="nofollow"<?php } ?> target="_blank" href="https://www.bluesummitcreative.com/">Website Design by Blue Summit Creative</a> | 
						
						<a href="https://www.facebook.com/TrueYouInMotion/" target="_blank"><i class="fab fa-facebook-square"></i></a>
							
						<a href="https://www.instagram.com/trueyouinmotion/" target="_blank"><i class="fab fa-instagram"></i></a>
							
						</p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<?php wp_footer(); ?>
	<script>
		jQuery(document).ready(function () {
		  $(".carousel-item").addClass("active");
		});
		
		$('#carouselExample').on('slide.bs.carousel', function (e) {

		    var $e = $(e.relatedTarget);
		    var idx = $e.index();
		    var itemsPerSlide = 3;
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
	</script>
	</body>
</html>
