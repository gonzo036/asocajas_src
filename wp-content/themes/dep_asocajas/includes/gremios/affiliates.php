<?php 
/*
	nuestras afiliadas
		nuestras_afiliadas
			logo_afiliada
			url_afiliada
*/

	$nuestras_afiliadas = get_field('nuestras_afiliadas');

	if($nuestras_afiliadas):
	?>
	<section class="AffiliatesEntity">
		<div class="container affiliates">
			<header>
				<h2>Nuestras afiliadas</h2>
			</header>
			<ul>
			<?php
				while(have_rows('nuestras_afiliadas')): the_row();
					$logo_afiliada = get_sub_field('logo_afiliada');
					$url_afiliada = get_sub_field('url_afiliada');
			?>
				<li>
					<a href="<?php echo $url_afiliada; ?>" target="_blank">
						<img src="<?php echo $logo_afiliada; ?>" alt="Ailiado Asocajas">
					</a>
				</li>
			<?php
				endwhile;
			?>
			</ul>
		</div>
	</section>
	<?php		
	endif;
