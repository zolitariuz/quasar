<?php
	get_header();
	the_post();

	$video = get_post_meta($post->ID, '_video_meta', true);
?>

	<section class="[ fitvid ][ margin-bottom ]">
		<div class="width clearfix">
			<?php echo $video; ?>
		</div>
	</section><!-- processing -->
	<div class="clear"></div>
	<div class="width clearfix">
		<div class="columna c-8 medium-10 small-12 text-center center">
			<?php the_content(); ?>
		</div>
		<div class="clear"></div>
		<div class="seccion ultimos-proyectos clearfix">
			<?php if (qtrans_getLanguage() == 'es'){ ?>
				<h2>Últimos proyectos</h2>
			<?php } else { ?>
				<h2>Latest proyects</h2>
			<?php } ?>

			<?php
			$proyectosArgs = array(
				'category_name' 	=> 'proyectos',
				'posts_per_page' 	=> '6'
			);
			$proyectosQuery = new WP_Query($proyectosArgs);
			if( $proyectosQuery->have_posts() ) : while( $proyectosQuery->have_posts() ) : $proyectosQuery->the_post(); ?>
				<div class="post-preview columna c-4 medium-6 small-12">
					<?php the_post_thumbnail( 'thumbnail' ); ?>
					<a href="<?php the_permalink(); ?>">
						<div class="malla"></div>
					</a>
					<div class="post-info">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div><!-- post-info -->
				</div><!-- post-preview -->
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div><!-- seccion ultimos-proyectos -->
	</div><!-- width -->
<?php get_footer(); ?>