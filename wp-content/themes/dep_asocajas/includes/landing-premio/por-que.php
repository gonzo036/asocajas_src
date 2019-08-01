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
    <div class="fabio-img">
      <img src="<?php echo $fabio_echeverry; ?>" alt="">
    </div>
    <div class="fabio-info">
      <?php echo $info_por_que; ?>
    </div>
  </section>
