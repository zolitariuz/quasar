<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
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

			<div id="intro" class="intro dark-background">

				<!-- <div class="processing no-medium">
					<canvas data-processing-sources="<?php echo THEMEPATH; ?>js/mouseSparkler.pde"  id="processing"></canvas>
				</div> -->

				<div class="centro columna c-3 medium-6">

					<div class="centro-in">

						<h1 class="columna c-8 center" >
							<a href="<?php echo site_url('home'); ?>">
								<img src="<?php echo THEMEPATH; ?>/images/logo-quasar-blanco.png" alt="" />
							</a>
						</h1>

						<!--<a class="boton mouse columna c-6 activo">
							mouse
						</a>

						<a class="boton camara columna c-6">
							cámara
						</a> -->

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
				<header class="[ clearfix ]">
					<div class="[ width ][ margin-top ][ no-small ]">
						<?php echo qtrans_generateLanguageSelectCode('text'); ?>
					</div>
					<nav class="width clearfix no-small">
						<a class="columna c-2 <?php if ( is_category('proyectos') ){ echo 'activo'; } ?>" href="<?php echo home_url( 'q/proyectos' ); ?>">
							<?php if (qtrans_getLanguage() == 'es'){ ?>
								Proyectos
							<?php } else { ?>
								Projects
							<?php } ?>
						</a>
						<img class="separador columna c-1" src="<?php echo THEMEPATH; ?>/images/separador.png" alt="">
						<a class="columna c-2 <?php if ( is_category('clientes') ){ echo 'activo'; } ?>" href="<?php echo home_url( 'q/clientes' ); ?>">
							<?php if (qtrans_getLanguage() == 'es'){ ?>
								Clientes
							<?php } else { ?>
								Clients
							<?php } ?>
						</a>
						<h1 class="columna c-2 logo" >
							<a class="span c-6 center" href="<?php echo site_url('home'); ?>">
								<img src="<?php echo THEMEPATH; ?>/images/logo-quasar.png" alt="" />
							</a>
						</h1>
						<a class="columna c-2 <?php if ( is_page('nosotros') ){ echo 'activo'; } ?>" href="<?php echo home_url( 'nosotros' ); ?>">
							<?php if (qtrans_getLanguage() == 'es'){ ?>
								Nosotros
							<?php } else { ?>
								About us
							<?php } ?>
						</a>
						<img class="separador columna c-1" src="<?php echo THEMEPATH; ?>/images/separador.png" alt="">
						<a class="columna c-2 <?php if ( is_page('contacto') ){ echo 'activo'; } ?>" href="<?php echo home_url( 'contacto' ); ?>">
							<?php if (qtrans_getLanguage() == 'es'){ ?>
								Contacto
							<?php } else { ?>
								Contact
							<?php } ?>
						</a>
					</nav>
					<!-- menú móvil -->

					<div class="columna c-3 mobile-header">
						<a href="#sidr-main" id="responsive-menu-btn" class="btn-menu-movil"><i class="fa fa-bars"></i></a>
					</div>
					<h1 class="columna c-6 logo small no-medium" >
						<a class="c-6 center" href="<?php echo home_url(); ?>">
							<img src="<?php echo THEMEPATH; ?>/images/logo-quasar-movil.png" alt="" />
						</a>
					</h1>

					<div class="sidr no-medium small" id="sidr">
						<div class="[ width ][ no-small ]">
							<?php echo qtrans_generateLanguageSelectCode('text'); ?>
						</div>
						<ul>
							<li>
								<a class="<?php if ( is_category('proyectos') ){ echo 'activo'; } ?>" href="<?php echo home_url( 'q/proyectos' ); ?>">
									<?php if (qtrans_getLanguage() == 'es'){ ?>
										Proyectos
									<?php } else { ?>
										Projects
									<?php } ?>
								</a>
							</li>
							<li>
								<a class="<?php if ( is_category('clientes') ){ echo 'activo'; } ?>" href="<?php echo home_url( 'q/clientes' ); ?>">
								<?php if (qtrans_getLanguage() == 'es'){ ?>
									Clientes
								<?php } else { ?>
									Clients
								<?php } ?>
								</a>
							</li>
							<li>
								<a class="<?php if ( is_page('nosotros') ){ echo 'activo'; } ?>" href="<?php echo home_url( 'nosotros' ); ?>">
									<?php if (qtrans_getLanguage() == 'es'){ ?>
										Nosotros
									<?php } else { ?>
										About us
									<?php } ?>
								</a>
							</li>
							<li>
								<a class="<?php if ( is_page('contacto') ){ echo 'activo'; } ?>" href="<?php echo home_url( 'contacto' ); ?>">
								<?php if (qtrans_getLanguage() == 'es'){ ?>
									Contacto
								<?php } else { ?>
									Contact
								<?php } ?>
								</a>
							</li>
						</ul>
					</div>
				</header>
			<div class="main">
		<?php } ?>



