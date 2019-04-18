<section id="MainPost">
	<div class="container pod-news">
		<header>
			<h2>Noticias</h2>
		</header>
		<div id="postsWrapper" class="pod-news--wrapper">
			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array( 'post_type' => 'post', 'posts_per_page' => 9, 'paged' => $paged);
				$query = new WP_Query( $args );
				while ( $query->have_posts() ) : $query->the_post();

					$def = '#d84e65';
					$color = get_field('color_item');
					$hover;

					if ($color) {
						$hover = get_field('color_item');
					} else {
						$hover = $def;
					}
					
			?>
				<article class="pod-news--item">
					<div class="pod-news--overlay">
						<span class="overlap-bg" style="background-color: <?php echo $hover; ?>"></span>
						<div class="over-text">
							<span class="over-text--center">
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="more-link">
									Leer Más
									<span class="more-icon"></span>
								</a>
							</span>
						</div>
					</div>
					<figure class="pod-news--thumb" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
						<a href="<?php the_permalink(); ?>"></a>
					</figure>
					<div class="pod-news--caption">
						<h3>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>				
						</h3>
						<h4>
							<?php the_time('F j, Y'); ?>
						</h4>
					</div>
				</article>
			<?php
				endwhile;
			?>
			<?php if ( function_exists('bst_pagination') ) { bst_pagination(); } else if ( is_paged() ) { ?>
			  <ul class="pagination">
			    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'bst')) ?></li>
			    <li class="newer"><?php previous_posts_link(__('Next', 'bst') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
			  </ul>
			<?php } ?>
			<?php
				wp_reset_query();
			?>
		</div>
	</div>
</section>