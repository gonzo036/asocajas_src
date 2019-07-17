<?php
/*
	Campos
  banner
  fecha_congreso
  lugar_congreso
  link_agenda


*/
	$banner= get_field('banner');
  $fecha_congreso= get_field('fecha_congreso');
  $lugar_congreso= get_field('lugar_congreso');
  $link_agenda= get_field('link_agenda');


	?>
  <section id="banner-congreso">
		<div class="container banner">
      <?php if($banner): ?>
        <img src="<?php echo $banner; ?>" alt="" width="100%" height="auto">
      <?php endif; ?>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3><?php echo $fecha_congreso; ?></h3>
        </div>
        <div class="col-md-6">
          <h3><?php echo $lugar_congreso; ?></h3>
        </div>
      </div>
      <div class="row">
        <a href="<?php echo $link_agenda; ?>"> <h3>CONOCE LA AGENDA AQUI</h3> </a>
      </div>

    </div>
  </section>
