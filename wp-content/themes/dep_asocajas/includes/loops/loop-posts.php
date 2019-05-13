<?php

	// Filter component by date
	setlocale(LC_ALL,"es_ES");

	$month = $_POST['month'];
	$year = $_POST['year'];
	$date = DateTime::createFromFormat('!m', $month);
	$monthName = strftime('%B', mktime(0, 0, 0, $month));
	$args;

?>

<section id="MainPost">
	<div class="container pod-news">
		<header>
			<h2>Noticias</h2>
			<?php if($month): ?>
				<h3>Notas emitidas en <?php echo ucfirst($monthName); ?> de <?php echo $year; ?></h3>
			<?php endif; ?>
		</header>
		<div class="wrapper-form filter">
			<form action="<?php the_permalink()?>" method="post">
				<div class="form-item form-item--label">
					<h4>Emitida en:</h4>
				</div>
				<div class="form-item form-item--select">
					<select name="month">
						<option value="">Mes</option>
						<option value="01">Enero</option>
						<option value="02">Febrero</option>
						<option value="03">Marzo</option>
						<option value="04">Abril</option>
						<option value="05">Mayo</option>
						<option value="06">Junio</option>
						<option value="07">Julio</option>
						<option value="08">Agosto</option>
						<option value="09">Septiembre</option>
						<option value="10">Octubre</option>
						<option value="11">Noviembre</option>
						<option value="12">Diciembre</option>
					</select>
				</div>
				<div class="form-item form-item--select">
					<select name="year">
						<option value="">Año</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
					</select>
				</div>

				<div class="form-item form-item--actions">
					<span><input type="submit" value="Filtrar"></span>
					<span><a href="<?php the_permalink()?>" class="reset-form">Reiniciar Filtro</a></span>
				</div>
			</form>
		</div>
		<div id="postsWrapper" class="pod-news--wrapper">
	
			<?php

				// Filter component by date

				if(!empty($month) && !empty($year)) {

					//$args = array( 
					//	'post_type' => 'post', 
					//	'posts_per_page' => 9,
					//	'date_query' => array(
					//	array(
					//			'year' => date($year),
					//			'month' => date($month)
					//		)
					//	),
					//);

					$args = array ( 
						'post_type' => 'post',
						'date_query' => array(
						array (
								'year' => intval($year),
								'month' => intval($month)
							)
						),
					);

				} else {
					$args = array( 
						'post_type' => 'post', 
						'posts_per_page' => 9
					);
				}

				$query = new WP_Query( $args );
				
				if($query->have_posts()):

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
				else:
			?>
				<div class="no-content">
					<h2>No existen Notas de Prensa con ese criterio de fechas, por favor intenta de nuevo</h2>
				</div>
			<?php endif; ?>

			<?php
				wp_reset_query();
			?>
		</div>
	</div>
</section>