<?php
	/*
		Campos
		ponentes-intenacionales
			foto
			nombre
			cargo
			descripcion
	*/

	$ponentes_intenacionales = get_field('ponentes-intenacionales');
?>

<?php if($ponentes_intenacionales): ?>
<section id="eventExponents">
	<header>
		<h2>Ponentes internacionales</h2>
	</header>
	<div class="event-ponents container">
		<?php while(have_rows('ponentes-intenacionales')): the_row();
			$foto = get_sub_field('foto');
			$nombre= get_sub_field('nombre');
			$cargo  = get_sub_field('cargo');
			$descripcion    = get_sub_field('descripcion');
		?>
			<article class="event-ponents-item">
				<?php if($foto): ?>
					<figure>
						<img src="<?php echo $foto; ?>" alt="<?php echo $nombre; ?>">
					</figure>
				<?php endif; ?>
				<?php if($nombre): ?>
					<h4><?php echo $nombre; ?></h4>
				<?php endif; ?>
				<?php if($cargo): ?>
					<h5><?php echo $cargo; ?></h5>
				<?php endif; ?>
				<div class="event-ponents-item-caption">
					<?php if($descripcion): ?>
						<?php echo $descripcion; ?>
					<?php endif; ?>
				</div>
			</article>
		<?php endwhile;?>
	</div>
</section>

<?php endif; ?>
