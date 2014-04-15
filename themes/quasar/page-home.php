<?php get_header(); ?>

	<div class="seccion processing">

	</div><!-- processing -->

	<div class="clear"></div>

	<div class="width clearfix">

		<div class="columna c-8 medium-10 small-12 text-center center">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Claudii libidini, qui tum erat summo ne imperio, dederetur. Quos nisi redarguimus, omnis virtus, omne decus, omnis vera laus deserenda est. Quae autem natura suae primae institutionis oblita est. Minime vero, inquit ille, consentit. Duo Reges: constructio interrete. Primum cur ista res digna odio est, nisi quod est turpis.</p>
		</div>

		<div class="clear"></div>

		<div class="seccion ultimos-proyectos clearfix">

			<h2>Últimos proyectos</h2>

			<?php
			$proyectosArgs = array(
				'category_name' 	=> 'proyectos',
				'posts_per_page' 	=> '6'
			);

			$proyectosQuery = new WP_Query($proyectosArgs);

			if( $proyectosQuery->have_posts() ) : while( $proyectosQuery->have_posts() ) : $proyectosQuery->the_post(); ?>


				<div class="post-preview columna c-4 medium-6 small-12">

					<?php the_post_thumbnail( 'full' ); ?>

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