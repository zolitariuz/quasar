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
						if( $footerQuery->have_posts() ) : while( $footerQuery->have_posts() ) : $footerQuery->the_post();
							the_content();
						endwhile; endif;
					?>
					<div class="redes">
						<a target="_blank" href="https://www.facebook.com/quarso">
							<i class="fa fa-facebook-official"></i>
						</a>
						<a target="_blank" href="https://instagram.com/quarso">
							<i class="fa fa-instagram"></i>
						</a>
						<a target="_blank" href="https://vimeo.com/quarso">
							<i class="fa fa-vimeo-square"></i>
						</a>
					</div>

				</div><!-- width -->
			</footer>
		<?php } ?>
		<?php wp_footer(); ?>
	</body>
</html>
