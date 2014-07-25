<?php
	get_header();
	the_post();
?>

	<div class="seccion processing">
		<canvas data-processing-sources="<?php echo THEMEPATH; ?>js/colorChains.pde"  id="processing"></canvas>
	</div><!-- processing -->

	<div class="clear"></div>

	<div class="width clearfix">

		<div class="seccion ultimos-proyectos clearfix">

			<h2>Nosotros</h2>

			<?php the_content(); ?>

		</div><!-- seccion ultimos-proyectos -->

	</div><!-- width -->

<?php get_footer(); ?>