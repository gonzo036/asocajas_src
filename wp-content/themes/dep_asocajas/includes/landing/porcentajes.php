<?php
/*
	Campos

  porcentajes (field_repeater)

*/


  $porcentajes = get_field('porcentajes');

  if ($porcentajes):

	?>
  <section id="porcentajes">
    <div class="container-fluid">
      <div class="row">
        <?php

        while(have_rows('porcentajes')): the_row();
          $icono = get_sub_field('icono');
          $contenido = get_sub_field('contenido');

        ?>

        <div class="item">
          <img src="<?php echo $icono ?>" alt="">
          <p><?php echo $contenido ?></p>

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
