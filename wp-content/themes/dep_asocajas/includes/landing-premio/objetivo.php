<?php
/*
	Campos
  objetivo
  iconos_objetivo (field_repeater)
    -icono
    -texto

*/
	$objetivo= get_field('objetivo');
  $iconos_objetivo= get_field('iconos_objetivo');

	?>
  <section id="objetivo">
    <div class="objetivo">
			<div class="objetivo--contentLeft">
				<div class="icono-header">
					<img src="<?php bloginfo('template_url')?>/img/icono2.png" alt="icono">
				</div>
				<div class="objetivo--info">
					<?php echo $objetivo; ?>
				</div>
			</div>

      <div class="objetivo--iconos iconos">
        <?php if($iconos_objetivo): ?>

        <?php

          while(have_rows('iconos_objetivo')): the_row();
            $icono = get_sub_field('icono');
            $texto = get_sub_field('texto');

        ?>
        <div class="iconos--item">
          <img src="<?php echo $icono; ?>" alt="">
          <p><?php echo $texto; ?></p>
        </div>

      <?php
		endwhile;
		endif; ?>
      </div>
    </div>

  </section>
