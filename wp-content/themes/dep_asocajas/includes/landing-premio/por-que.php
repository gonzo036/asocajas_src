<?php
/*
	Campos
  fabio_echeverry
  info_por_que

*/
	$fabio_echeverry= get_field('fabio_echeverry');
  $info_por_que= get_field('info_por_que');

	?>
  <section id="banner-fabio">
		<div class="fabio">
			<div class="fabio--imagen">
				<figure>
					<img src="<?php echo $fabio_echeverry; ?>" alt="">
				</figure>

			</div>
			<div class="fabio--text">
				<div class="icono-header">
					<img src="" alt="">
				</div>
				<div class="">
						<?php echo $info_por_que; ?>
				</div>

			</div>
		</div>

  </section>
