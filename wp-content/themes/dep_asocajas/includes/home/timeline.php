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
					$color = get_sub_field('color_fondo');
				?>

					<li class="time--number" data-year="<?php echo $ano; ?>" data-color="<?php echo $color ?>">
						<span class="time--holder">
							<h4><?php echo $ano; ?></h4>
						</span>

						<span class="arrow-up arrow-<?php echo $index; ?>" style="border-bottom: 30px solid <?php echo $color; ?>"></span>
					</li>

				<?php endwhile; ?>
			</ul>
			<div class="time--details">
				<?php

				$index = 1;

				while(have_rows('linea_tiempo')): the_row();

					$ano = get_sub_field('ano');
					$texto = get_sub_field('texto');
					$color = get_sub_field('color_fondo');
				?>

					<div class="time---detail" data-year="<?php echo $ano; ?>" data-color="<?php echo $color; ?>">
						<h4><?php echo $ano; ?></h4>
						<span><?php echo $texto; ?></span>
					</div>

				<?php $index++; endwhile; ?>
			</div>
		</div>
	</section>

	<?php

	endif;


<a href="https://twitter.com/analizarlab" target="_blank"><img  class="alignright wp-image-1520 size-medium" src="https://www.analizarlab.com/wp-content/uploads/2019/09/Untitled-4-02.png" alt="boton-de-logo-del-twitter" width="25" height="25" /></a>
<a href="https://www.facebook.com/analizarlaboratorio/?fref=ts" target="_blank"><img class="alignright wp-image-1521 size-medium" src="https://www.analizarlab.com/wp-content/uploads/2019/09/Untitled-4-01.png" alt="logo-de-facebook" width="25" height="25" /></a>
<a href="https://www.instagram.com/analizarlab/" target="_blank"><img class="alignright wp-image-1521 size-medium" src="https://www.analizarlab.com/wp-content/uploads/2019/09/Untitled-4-03.png" alt="logo-de-instagram" width="25" height="25" /></a>
