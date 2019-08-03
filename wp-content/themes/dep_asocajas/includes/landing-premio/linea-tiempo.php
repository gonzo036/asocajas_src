<?php
/*
	Campos Tiempos
	- linea_tiempo (field_repeater)
		fecha
		imagen
    descripcion


*/
/*
	$linea_tiempo = get_field('linea_tiempo2');

	if($linea_tiempo):

	?>

	<section id="premioTimeline">
    <div class="icono-header">
      <img src="" alt="">
    </div>

		<header>
			<h3>SOBRE FABIO ECHEVERRI CORREA</h3>
		</header>
		<div class="time-wrapper container time">
			<ul class="time--numbers">
				<?php
				while(have_rows('linea_tiempo2')): the_row();

					$fecha = get_sub_field('fecha');
					$imagen = get_sub_field('imagen');
					$descripcion = get_sub_field('descripcion');
				?>

					<li class="time--number" data-year="<?php echo $fecha; ?>">
						<span class="time--holder">
							<h4><?php echo $fecha; ?></h4>
						</span>

						<span class="arrow-up arrow-<?php echo $index; ?>"></span>
					</li>

				<?php endwhile; ?>
			</ul>
			<div class="time--details">
				<?php

				$index = 1;

				while(have_rows('linea_tiempo2')): the_row();

					$fecha = get_sub_field('fecha');
					$imagen = get_sub_field('imagen');
					$descripcion = get_sub_field('descripcion');
				?>

					<div class="time---detail" data-year="<?php echo $fecha; ?>" >
						<img src="<?php echo $imagen; ?>" alt="">
						<span><?php echo $descripcion; ?></span>
					</div>

				<?php $index++; endwhile; ?>
			</div>
		</div>
	</section>

	<?php
	endif;
	?>
*/
