<?php
//

/*
	Loop for home

*/

?>

<section id="HomePost">
	<div class="container home-news">
		<header>
			<h2>Noticias</h2>
		</header>
		<div class="home-news--wrapper">
			<?php
				$args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
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
				<article class="home-news--item">
					<div class="home-news--overlay">
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
					<figure class="home-news--thumb" style="background-image:url('<?php the_post_thumbnail_url('medium'); ?>')">
						<a href="<?php the_permalink(); ?>"></a>
					</figure>
					<div class="home-news--caption">
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
				wp_reset_query();
			?>
		</div>
		<div class="boton-mas text-center">
			<a class="home-event--link" href="https://www.asocajas.org.co/sala-de-prensa/">VER MÁS NOTICIAS</a>
		</div>
	</div>
</section>
