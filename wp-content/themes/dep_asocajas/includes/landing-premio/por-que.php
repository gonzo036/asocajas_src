<?php
/*
	Campos
  fabio_echeverry
  info_por_que

*/
	$fabio_echeverry= get_field('fabio_echeverry');
  $info_por_que= get_field('info_por_que');

	?>
  <section id="banner-fabio" style="background-image:url(https://www.asocajas.org.co/wp-content/uploads/2019/08/Fondo.png)">
		<div class="container fabio">
			<div class="fabio-img">
				<figure>
					<img src="<?php echo $fabio_echeverry; ?>" alt="">
				</figure>

			</div>
			<div class="fabio-info">
				<div class="icono-header">
					<img src="" alt="">
				</div>
				<?php echo $info_por_que; ?>
			</div>
		</div>

  </section>
