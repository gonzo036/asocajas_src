<?php
	/*
		Campos
		jurados
			foto
			nombre
			cargo
			descripcion
	*/

	$jurados = get_field('jurados');
?>

<?php if($jurados): ?>
<section id="jurados">
	<div class="jurados" >
		<header class="jurados__header ">
			<span>
				<div class="icono-header">
					<img src="<?php bloginfo('template_url')?>/img/icono-jurados.png" alt="">
				</div>
				<h3>CONOCE A NUESTROS JURADOS</h3>
			</span>
		</header>
		<div class="event-ponents ">
			<?php while(have_rows('jurados')): the_row();
				$foto = get_sub_field('foto');
				$nombre= get_sub_field('nombre');
				$cargo  = get_sub_field('cargo');

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

					</div>
				</article>
			<?php endwhile;?>
		</div>
	</div>

</section>

<?php endif; ?>
