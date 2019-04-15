<?php
	/*
		Campos
		ponentes
			imagen_ponente
			nombre_ponente
			cargo_ponente
			texto_popup
	*/

	$ponentes = get_field('ponentes');
?>

<?php if($ponentes): ?>
<section id="eventExponents">
	<div class="event-ponents container">
		<?php while(have_rows('ponentes')): the_row(); 
			$imagen_ponente = get_sub_field('imagen_ponente');
			$nombre_ponente = get_sub_field('nombre_ponente');
			$cargo_ponente  = get_sub_field('cargo_ponente');
			$texto_popup    = get_sub_field('texto_popup');
		?>
			<article class="event-ponents-item">
				<?php if($imagen_ponente): ?>
					<figure>
						<img src="<?php echo $imagen_ponente; ?>" alt="<?php echo $nombre_ponente; ?>">
					</figure>
				<?php endif; ?>
				<?php if($nombre_ponente): ?>
					<h4><?php echo $nombre_ponente; ?></h4>
				<?php endif; ?>
				<?php if($cargo_ponente): ?>
					<h5><?php echo $cargo_ponente; ?></h5>
				<?php endif; ?>
				<div class="event-ponents-item-caption">
					<?php if($texto_popup): ?>
						<?php echo $texto_popup; ?>
					<?php endif; ?>
				</div>
			</article>
		<?php endwhile;?>
	</div>	
</section>

<?php endif; ?>