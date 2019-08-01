<?php
/*
	Campos
  info_criterios
  criterios_infografia


*/
	$info_criterios= get_field('info_criterios');
  $criterios_infografia= get_field('criterios_infografia');

	?>
  <section id="criterios">
    <div class="criterios">
      <div class="criterios-info">
        <div class="icono-header">
          <img src="" alt="">
        </div>
        <div class="criterios-contenido">
          <?php echo $info_criterios; ?>
        </div>
      </div>
      <div class="criterios-infografia">
        <img src="<?php echo $criterios_infografia; ?>" alt="">
      </div>


    </div>
  </section>
