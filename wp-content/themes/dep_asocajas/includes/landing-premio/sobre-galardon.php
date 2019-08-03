<?php
/*
	Campos
  imagen_galardon
  texto_galardon


*/
	$imagen_galardon= get_field('imagen_galardon');
  $info_galardon= get_field('info_galardon');

	?>
  <section id="galardon-block" style="background-image:url(https://www.asocajas.org.co/wp-content/uploads/2019/08/Fondo.png)">
    <div class="galardon-img">
      <img src="<?php echo $imagen_galardon; ?>" alt="">
    </div>
    <div class="galardon-info">
      <?php echo $info_galardon; ?>
    </div>
  </section>
