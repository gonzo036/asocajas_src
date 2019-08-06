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

      <div class="postulacion__wrapper">
        
        <div class="postulacion__wrapper-side postulacion-requisitos">

          <header class="postulacion__header requisitos">
            <span>
              <div class="icono-header">
                <img src="<?php bloginfo('template_url')?>/img/icono-requisitos.png" alt="">
              </div>
              <h3>REQUISITOS DE POSTULACIÓN</h3>
            </span>
          </header>

          <div class="requisitos">
            <div class="infografia">
              <div class="requisitos__side">
                <img src="<?php echo $requisitos_infografia; ?>" alt="">
              </div>
              <div class="requisitos__side">
                <?php echo $info_requisitos; ?>
              </div>
            </div>
          </div>
        </div>


        <div class="postulacion__wrapper-side postulacion-proceso">
          
          <header class="postulacion__header proceso">
            <span>
              <div class="icono-header">
                <img src="<?php bloginfo('template_url')?>/img/icono-postulacion.png" alt="">
              </div>
              <h3>PROCESO DE POSTULACIÓN</h3>
            </span>
          </header>
          
          <?php if($proceso_postulacion): ?>

          <?php

            while(have_rows('proceso_postulacion')): the_row();
              $icono = get_sub_field('icono');
              $informacion = get_sub_field('informacion');

          ?>
          <div class="postulacion-item">
            <figure class="postulacion-item__thumb">
              <img src="<?php echo $icono; ?>" alt="">
            </figure>
            <div class="postulacion-item__text">
              <p><?php echo $informacion; ?></p>
            </div>
          </div>
        <?php
      endwhile;
      endif; ?>
        </div>

      </div>
    </div>

  </section>
