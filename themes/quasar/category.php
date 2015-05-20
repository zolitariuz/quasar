<?php get_header(); ?>

<?php
	$category = get_category($cat);
	$categoryName = $category->cat_name;
	$categorySlug = $category->category_nicename;
?>

	<!--<div class="seccion processing">
		<canvas data-processing-sources="<?php echo THEMEPATH; ?>js/colorChains.pde"  id="processing"></canvas>
	</div> processing -->

	<div class="clear"></div>
	<div class="width clearfix">
		<div class="[ clear ]"></div>
		<div class="seccion ultimos-proyectos clearfix">
			<h2><?php echo $categoryName; ?></h2>
			<?php
				$counter = 1;
				$categoryArgs 	= array(
					'category_name'  => $categoryName,
					'posts_per_page' 	=> '-1',
				);
				//$categoryQuery 	= new WP_Query($categoryArgs);
			?>
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<div class="post-preview columna c-4 medium-6 small-12">
					<?php the_post_thumbnail( 'thumbnail' ); ?>
					<a href="<?php the_permalink(); ?>">
						<div class="malla"></div>
					</a>
					<div class="post-info">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div><!-- post-info -->
				</div><!-- post-preview -->

				<?php if($counter % 3 == 0){ ?>
					<div class="[ clear ]"></div>
				<?php } ?>
				<?php if($counter % 2 == 0){ ?>
					<div class="[ clear--medium ]"></div>
				<?php } ?>

			<?php $counter++; endwhile; endif; wp_reset_postdata(); ?>
		</div><!-- seccion ultimos-proyectos -->

	</div><!-- width -->

<?php get_footer(); ?>