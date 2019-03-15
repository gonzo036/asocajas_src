<?php 
/*
	Entes reguladores
		entes_reguladores
			img_ente
			link_ente
*/

	$entes_reguladores = get_field('entes_reguladores');

	if($entes_reguladores):
	?>
	<section class="RegulatorEntity">
		<div class="container entities">
			<header>
				<h2>Entes Reguladores</h2>
			</header>
			<ul>
			<?php
				while(have_rows('entes_reguladores')): the_row();
					$img_ente = get_sub_field('img_ente');
					$link_ente = get_sub_field('link_ente');
			?>
				<li>
					<a href="<?php echo $link_ente; ?>" target="_blank">
						<img src="<?php echo $img_ente; ?>" alt="Ente Regulador Asocajas">
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
