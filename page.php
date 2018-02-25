<?php
	get_header();
	get_template_part('inc/page-header');
?>
<div class="container-fluid container-padding">
	<div class="container">
		<div class="row">
		<?php
			get_template_part('inc/loop');
			get_sidebar();
			?>
		</div>
	</div>
</div>
<?php
if ( is_home() ) :
	get_footer();
elseif ( is_404() ) :
	get_footer( '404' );
else :
	get_footer('cta');
endif;
?>

