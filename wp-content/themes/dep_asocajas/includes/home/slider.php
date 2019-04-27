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
				$video = get_sub_field('video_file');
				$url_destino= get_sub_field('url_destino');
			?>
			
				<div class="slider--item" style="background-image: url('<?php echo $imagen_slider; ?>')">
					<a href="<?php echo $url_destino; ?>">
						<img src="<?php echo $imagen_slider; ?>">
					</a>
					
					<?php if($video): ?>
					<!-- Video fix -->
					  <div id="video-container">
							<video autoplay loop id="video-background" muted plays-inline>
								<source src="<?php echo $video; ?>" type="video/mp4">
							</video>
					  </div>
					<?php endif; ?>
					<?php if($text_slider): ?>
						<div class="slider--caption">
							<?php echo $text_slider; ?>
							<span class="slider--hightlight"><?php echo $texto_resaltado; ?></span>
						</div>
					<?php endif; ?>
				</div>

			<?php endwhile; ?>
		</div>
	</section>

	<?php

	endif;