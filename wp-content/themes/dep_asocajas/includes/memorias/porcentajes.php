<?php
/*
	Campos

  porcentajes (field_repeater)

*/


  $porcentajes = get_field('porcentajes');

  if ($porcentajes):

	?>
  <section id="porcentajes">
    <div class="container">
      <div class="row porcentaje-content">
        <?php

        while(have_rows('porcentajes')): the_row();
          $icono = get_sub_field('icono');
          $contenido = get_sub_field('contenido');

        ?>

        <div class="porcentaje-content--item">
          <img src="<?php echo $icono ?>" alt="">
          <div class="porcentaje-content--item--caption"><?php echo $contenido ?></div>
        </div>

        <?php
          endwhile;
        ?>
      </div>
    </div>
  </section>
  <?php
endif;
  ?>
