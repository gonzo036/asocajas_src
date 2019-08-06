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
      <header class="cronograma__header container">
        <span>
          <div class="icono-header">
            <img src="<?php bloginfo('template_url')?>/img/icono-cronograma.png" alt="cronograma">
          </div>
          <h3>CRONOGRAMA</h3>
        </span>
      </header>
      <div class="cronograma--items fechas">
        <?php if($cronograma): ?>

        <?php

          while(have_rows('cronograma')): the_row();
            $icono = get_sub_field('icono');
            $titulo = get_sub_field('titulo');

        ?>
        <div class="fechas--item <?php echo $titulo; ?>">
          <img src="<?php echo $icono; ?>" alt="">
          <p><?php echo $titulo; ?></p>
        </div>
      <?php
		endwhile;
		 endif; ?>
      </div>
    </div>

  </section>
