<?php
/*
	Campos
  requisitos_infografia
  info_requisitos
  proceso_postulacion (field_repeater)
    -icono
    -informacion

*/
	$requisitos_infografia = get_field('requisitos_infografia');
  $info_requisitos= get_field('info_requisitos');
  $proceso_postulacion= get_field('proceso_postulacion');

	?>
  <section id="postulacion">
    <div class="postulacion">
      <div class="postulacion-requisitos">
        <div class="icono-header">
          <img src="" alt="">
        </div>
        <h3>REQUISITOS DE POSTULACIÓN</h3>
        <div class="requisitos">
          <div class="infografia">
						<img src="<?php echo $requisitos_infografia; ?>" alt="">
						<?php echo $info_requisitos; ?>
          </div>
        </div>
      </div>


      <div class="postulacion-proceso">
        <div class="icono-header">
          <img src="" alt="">
        </div>
        <h3>PROCESO DE POSTULACIÓN</h3>
        <?php if($proceso_postulacion): ?>

        <?php

          while(have_rows('proceso_postulacion')): the_row();
            $icono = get_sub_field('icono');
            $informacion = get_sub_field('informacion');

        ?>
        <div class="postulacion-item">
          <img src="<?php echo $icono; ?>" alt="">
          <p><?php echo $informacion; ?></p>
        </div>
      <?php
		endwhile;
		endif; ?>
      </div>
    </div>

  </section>
