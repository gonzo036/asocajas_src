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
      <div class="row">
        <?php

        while(have_rows('porcentajes')): the_row();
          $icono = get_sub_field('icono');
          $porcentaje = get_sub_field('porcentaje');
          $descripcion = get_sub_field('descripcion');
        ?>

        <div class="item">
          <img src="<?php echo $icono ?>" alt="">
          <p><?php echo $porcentaje ?></p>
          <p><?php echo $descripcion ?></p>
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
