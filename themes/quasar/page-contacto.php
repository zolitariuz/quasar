<?php
	get_header();
	the_post();
?>

	<!--<div class="seccion processing">
		<canvas data-processing-sources="<?php echo THEMEPATH; ?>js/colorChains.pde"  id="processing"></canvas>
	</div> processing -->

	<div class="clear"></div>

	<div class="width clearfix">

		<div class="seccion ultimos-proyectos clearfix">

			<h2><?php the_title(); ?></h2>

			<form action="<?php echo home_url('recibido'); ?>" method="post" class="columna c-8 medium-10 small-12 center">

				<label class="full block" for="nombre">
					<?php if (qtrans_getLanguage() == 'es'){ ?>
						Nombre
					<?php } else { ?>
						Name
					<?php } ?>
				</label>
				<input class="full block required" name="nombre" type="text">

				<label class="full block" for="email">
					<?php if (qtrans_getLanguage() == 'es'){ ?>
						E-mail
					<?php } else { ?>
						E-mail
					<?php } ?>
				</label>
				<input class="full block required email" name="email" type="email">

				<label class="full block" for="mensaje">
					<?php if (qtrans_getLanguage() == 'es'){ ?>
						Mensaje
					<?php } else { ?>
						Message
					<?php } ?>
				</label>
				<textarea class="full block required" name="mensaje" id=""></textarea>

				<?php if (qtrans_getLanguage() == 'es'){ ?>
					<input class="block columna c-3 center medium-6 small-12" type="submit" value="enviar">
				<?php } else { ?>
					<input class="block columna c-3 center medium-6 small-12" type="submit" value="send">
				<?php } ?>

			</form>



		</div><!-- seccion ultimos-proyectos -->

	</div><!-- width -->

<?php get_footer(); ?>