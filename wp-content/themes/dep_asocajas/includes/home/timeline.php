<?php
/*
	Campos Tiempos
	- linea_tiempo (field_repeater) 
		ano 
		texto

*/

	$linea_tiempo = get_field('linea_tiempo');

	if($linea_tiempo):

	?>

	<section id="homeTimeline">
		<header>
			<h2>Nuestra historia</h2>
		</header>
		<div class="time-wrapper container time">
			<ul class="time--numbers">
				<?php 				
				while(have_rows('linea_tiempo')): the_row();

					$ano = get_sub_field('ano');
					$texto = get_sub_field('texto');
				?>
				
					<li class="time--number" data-year="<?php echo $ano; ?>">					
						<span class="time--holder">
							<h4><?php echo $ano; ?></h4>
						</span>
					</li>

				<?php endwhile; ?>
			</ul>
			<div class="time--details">
				<?php 
				
				while(have_rows('linea_tiempo')): the_row();

					$ano = get_sub_field('ano');
					$texto = get_sub_field('texto');
				?>
				
					<div class="time---detail" data-year="<?php echo $ano; ?>">					
						<h4><?php echo $ano; ?></h4>
						<span><?php echo $texto; ?></span>
					</div>

				<?php endwhile; ?>
			</div>
		</div>
	</section>

	<?php

	endif;