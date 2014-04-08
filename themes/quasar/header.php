<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> >
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->

		<?php if ( is_home() ) {?>

			<div id="intro" class="intro">

				<div class="centro columna c-3 medium-6">

					<div class="centro-in">

						<h1 class="columna c-8 center" >
							<a href="<?php home_url(); ?>">
								<img src="<?php echo THEMEPATH; ?>/images/logo-quasar-blanco.png" alt="" />
							</a>
						</h1>

						<a class="boton mouse columna c-6 activo">
							mouse
						</a><!-- boton -->

						<a class="boton camara columna c-6">
							cámara
						</a><!-- boton -->

						<div class="clear margin-bottom"></div>

						<a href="<?php echo home_url('/home'); ?>" class="block text-center boton full">
							Entrar
						</a>



					</div><!-- centro-in -->



				</div><!-- centro -->

			</div><!-- intro -->

		<?php } ?>


		<?php if ( ! is_home() ) {?>

			<div class="container">

				<header>
					<nav class="width clearfix">

						<a class="columna c-2" href="<?php echo home_url( 'q/proyectos' ); ?>">Proyectos</a>

						<img class="separador columna c-1" src="<?php echo THEMEPATH; ?>/images/separador.png" alt="">

						<a class="columna c-2" href="<?php echo home_url( 'q/clientes' ); ?>">Clientes</a>

						<h1 class="columna c-2 logo" >
							<a class="span c-6 center" href="#">
								<img src="<?php echo THEMEPATH; ?>/images/logo-quasar.png" alt="" />
							</a>
						</h1>

						<a class="columna c-2" href="<?php echo home_url( 'nosotros' ); ?>">Nosotros</a>

						<img class="separador columna c-1" src="<?php echo THEMEPATH; ?>/images/separador.png" alt="">

						<a class="columna c-2" href="<?php echo home_url( 'contacto' ); ?>">Contacto</a>

					</nav>

				</header>

				<div class="main">

		<?php } ?>



