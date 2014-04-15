<?php
	get_header();
	the_post();
?>

	<div class="seccion processing">

	</div><!-- processing -->

	<div class="clear"></div>

	<div class="width clearfix">

		<div class="seccion ultimos-proyectos clearfix">

			<h2>Contacto</h2>

			<form action="<?php echo home_url('recibido'); ?>" method="post" class="columna c-8 medium-10 small-12 center">

				<label class="full block" for="nombre">Nombre</label>
				<input class="full block required" name="nombre" type="text">

				<label class="full block" for="email">E-mail</label>
				<input class="full block required email" name="email" type="email">

				<label class="full block" for="mensaje">Mensaje</label>
				<textarea class="full block required" name="mensaje" id=""></textarea>

				<input class="block columna c-3 center medium-6 small-12" type="submit" value="enviar">

			</form>



		</div><!-- seccion ultimos-proyectos -->

	</div><!-- width -->

<?php get_footer(); ?>