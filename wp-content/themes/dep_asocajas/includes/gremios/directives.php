<?php
/*
	
	directivos
	imagen_directivos

*/

	$directivos = get_field('directivos');
	$imagen_directivos = get_field('imagen_directivos');

	if($directivos && $imagen_directivos):


	?>

	<section id="Directives">
		<div class="container directives">					
			<div class="directives--text">
				<div class="directives--caption">
					<?php echo $directivos; ?>
				</div>				
			</div>
			<div class="directives--imagen">
				<figure>
					<img src="<?php echo $imagen_directivos; ?>" alt="Directivos Asocajas">
				</figure>
			</div>			
		</div>
	</section>

	<?php

	endif;