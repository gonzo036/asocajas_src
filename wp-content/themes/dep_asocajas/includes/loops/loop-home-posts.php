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
			?>
				<article class="home-news--item">
					<figure class="home-news--thumb" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>')">
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
	</div>
</section>