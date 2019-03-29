<?php
/*
	Campos estatutos

	fondo_e_y_d
	estatus_directivos
		icono
		texto
		ulr_link

*/

	$fondo_e_y_d = get_field('fondo_e_y_d');
	$estatus_directivos = get_field('estatus_directivos');

	if($fondo_e_y_d):

	?>
	
	<section id="StatuteValues">
		<div class="statute" style="background-image: url('<?php echo $fondo_e_y_d; ?>')">
			<?php
				if($estatus_directivos):
					while(have_rows('estatus_directivos')): the_row();

						$icono = get_sub_field('icono');
						$texto = get_sub_field('texto');
						$ulr_link = get_sub_field('ulr_link');
			?>
				<?php if($ulr_link): ?>
					<div class="statute--item">
							<img src="<?php echo $icono; ?>" alt="Estatuto Asocajas">					
							<a href="<?php echo $ulr_link; ?>"><?php echo $texto; ?></a>						
					</div>
				<?php endif;?>
			<?php
					endwhile;
				endif;
			?>
		</div>		
	</section>

	<?php
	endif;