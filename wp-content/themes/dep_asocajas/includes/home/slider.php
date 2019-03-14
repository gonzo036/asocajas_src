<?php
/*
	Campos slider
	- slider (field_repeater) 
		imagen_slider 
		text_slider 
		texto_resaltado 

*/

	$slider = get_field('slider');

	if($slider):

	?>

	<section id="homeSlider">
		<div class="slider-wrapper slider">
			<?php 
			
			while(have_rows('slider')): the_row();

				$imagen_slider = get_sub_field('imagen_slider');
				$text_slider = get_sub_field('text_slider');
				$texto_resaltado = get_sub_field('texto_resaltado');
			?>
			
				<div class="slider--item" style="background-image: url('<?php echo $imagen_slider; ?>')">
					<img src="<?php echo $imagen_slider; ?>">
					<div class="slider--caption">
						<?php echo $text_slider; ?>
						<span class="slider--hightlight"><?php echo $texto_resaltado; ?></span>
					</div>
				</div>

			<?php endwhile; ?>
		</div>
	</section>

	<?php

	endif;