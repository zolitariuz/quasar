<?php
	get_header();
	the_post();

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];

	$post = array(
		'post_content' 	=> $mensaje,
		'post_title' 	=> "Mensaje de $nombre",
		'post_type' 	=> 'forma-contacto'
	);

	wp_insert_post( $post );
?>

	<div class="width clearfix">

		<div class="seccion ultimos-proyectos clearfix">

			<h2><?php echo $nombre; ?>, gracias por tu mensaje</h2>

			<p class="text-center">Nos pondremos en contacto contigo lo antes posible.</p>

		</div><!-- seccion ultimos-proyectos -->

	</div><!-- width -->

<?php get_footer(); ?>