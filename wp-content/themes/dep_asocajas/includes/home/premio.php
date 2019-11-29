<?php
/*
	Campos Evento

imagen_banner
url_destino

*/

	$imagen_banner_fec = get_field('imagen_banner_fec');
	$url_destino_fec = get_field('url_destino_fec');


	if($imagen_banner_fec):

	?>

<div class="text-center">
      <header>
      <h2>MEMORIAS CONGRESO 2019</h2>
    </header>
</div>
<section id="homeEvent" class="home-event">
  <a href="<?php echo $url_destino_fec; ?>">
    <img src="<?php echo $imagen_banner_fec; ?>" alt="">
  </a>
</section>
<?php

endif;
