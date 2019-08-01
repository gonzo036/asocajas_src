<?php
/*
	Campos
  imagen_de_fondo
  icono_inscripciones
  info_inscripcion



*/
	$imagen_de_fondo= get_field('imagen_de_fondo');
  $info_inscripcion= get_field('info_inscripcion');

	?>
  <section id="inscripciones">
    <div class="inscripciones" style="background-image:url(<?php echo $imagen_de_fondo; ?>)">
      <div class="">
        <div class="icono-header">
          <img src="" alt="">
        </div>
        <div class="inscripciones-info">
          <?php echo $info_inscripcion; ?>
        </div>
      </div>
    </div>

  </section>
