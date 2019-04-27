<?php
/*
	Campos Evento

imagen_banner
url_destino

*/

	$imagen_banner = get_field('imagen_banner');
	$url_destino = get_field('url_destino');


	if($imagen_banner):

	?>
	<div class="text-center">
				<header>
				<h2>REVISTAS</h2>
			</header>
	</div>
	<section id="homeEvent" class="home-event" style="background-image: url('<?php echo $imagen_banner; ?>')">
		<a href="<?php echo $url_destino; ?>">
			<img src="<?php echo $imagen_banner; ?>" alt="">
		</a>
	</section>

	<?php

	endif;
