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
  <section id="inscripciones" style="background-image:url(<?php echo $imagen_de_fondo; ?>)">
    <div class="inscripciones">
      <header class="inscripciones__header container">
        <span>
          <div class="icono-header">
            <img src="<?php bloginfo('template_url')?>/img/icono-inscripcione.png" alt="">
          </div>
          <h3>INSCRIPCIONES</h3>
        </span>
      </header>
      <div class="inscripciones__info container">
        <div class="inscripciones__info-side">
          <?php echo $info_inscripcion; ?>
        </div>
      </div>
    </div>
  </section>
