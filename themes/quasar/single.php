<?php
	get_header();
	the_post();
?>

	<div class="seccion processing">

	</div><!-- processing -->

	<div class="clear"></div>

	<div class="width clearfix">

		<div class="seccion ultimos-proyectos clearfix">

			<h2><?php the_title(); ?></h2>

			<?php the_content(); ?>

		</div><!-- seccion ultimos-proyectos -->

	</div><!-- width -->

<?php get_footer(); ?>