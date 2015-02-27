		<?php if ( ! is_home() ) { ?>
				</div><!-- main -->
			</div><!-- container -->
			<footer>
				<div class="width">
					<?php
						$pageID = get_ID_by_slug('footer');
						$footerArgs  = array(
							'page_id' => $pageID
						);
						$footerQuery = new WP_Query($footerArgs);
						if( $footerQuery->have_posts() ) : while( $footerQuery->have_posts() ) : $footerQuery->the_post(); ?>
							<p><?php the_content(); ?></p>
					<?php endwhile; endif; ?>
				</div><!-- width -->
			</footer>
		<?php } ?>
		<?php wp_footer(); ?>
	</body>
</html>
