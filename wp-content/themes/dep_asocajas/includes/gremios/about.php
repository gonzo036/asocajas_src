<?php
/*
	Campos About
	quienes_somos (field_repeater) 
		icono 
		texto

*/

	$quienes_somos = get_field('quienes_somos');

	if($quienes_somos):

	?>

	<section id="About">
		<div class="container">
			<header>
				<h2>Quienes somos</h2>
			</header>
			<div class="about-wrapper about">
				<?php 
				
				while(have_rows('quienes_somos')): the_row();

					$icono = get_sub_field('icono');
					$texto = get_sub_field('texto');
				?>
				
					<div class="about--item">
						<img src="<?php echo $icono; ?>" alt="Valor Asocajas">
						<div class="about--caption">
							<?php echo $texto; ?>
						</div>
					</div>

				<?php endwhile; ?>
			</div>
		</div>
	</section>

	<?php

	endif;