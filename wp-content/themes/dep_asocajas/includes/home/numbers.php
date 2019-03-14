<?php
/*
	Campos Cifras
	nuestras_cifras (field_repeater) 
		icono_cifra  
		numero_cifra 
		texto_cifra 

*/

	$nuestras_cifras = get_field('nuestras_cifras');

	if($nuestras_cifras):

	?>

	<section id="homeNumbers">
		<header>
			<h2>Nuestras Cifras</h2>
			<h3>Información Poblacional del Sistema</h3>
		</header>
		<div class="numbers-wrapper numbers">
			<?php 
			
			while(have_rows('nuestras_cifras')): the_row();

				$icono_cifra = get_sub_field('icono_cifra');
				$numero_cifra = get_sub_field('numero_cifra');
				$texto_cifra = get_sub_field('texto_cifra');
			?>
			
				<div class="numbers--item">
					<img src="<?php echo $icono_cifra; ?>">
					<div class="numbers--caption">
						<h4><?php echo $numero_cifra; ?></h4>
						<p><?php echo $texto_cifra; ?></p>
					</div>
				</div>

			<?php endwhile; ?>
		</div>
	</section>

	<?php

	endif;