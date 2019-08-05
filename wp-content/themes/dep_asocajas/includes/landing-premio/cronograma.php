<?php
/*
	Campos
  objetivo
  cronograma (field_repeater)
    -icono
    -titulo

*/
	$cronograma= get_field('cronograma');

	?>
  <section id="cronograma">
    <div class="cronograma">
      <div class="icono-header">
        <img src="" alt="">
      </div>
      <header>
        <h3>CRONOGRAMA</h3>
      </header>
      <div class="cronograma--items fechas">
        <?php if($cronograma): ?>

        <?php

          while(have_rows('cronograma')): the_row();
            $icono = get_sub_field('icono');
            $titulo = get_sub_field('titulo');

        ?>
        <div class="fechas--item">
          <img src="<?php echo $icono; ?>" alt="">
          <p><?php echo $titulo; ?></p>
        </div>
      <?php
		endwhile;
		 endif; ?>
      </div>
    </div>

  </section>
