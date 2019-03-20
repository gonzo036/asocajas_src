<?php
//

/*
	Variables
	titulo_as
  subtitulo_col1
  botones_col1 (field_repeater)
  subtitulo_col2
  botones_col2 (field_repeater)

*/

$titulo_as = get_field('titulo_as');
$subtitulo_col1 = get_field('subtitulo_col1');
$botones_col1 = get_field('botones_col1');
$subtitulo_col2 = get_field('subtitulo_col2');
$botones_col2 = get_field('botones_col2');

?>

<section id="acceso-sistema" class="container">
  <div class="titulo">
    <h2><?php echo $titulo_as; ?></h2>
  </div>
  <div class="ambientes">
    <div class="ambientes--co1">
      <h3><?php echo $subtitulo_col1; ?></h3>
      <?php
			if($botones_col1):
				while(have_rows('botones_col1')): the_row();

					$texto_boton = get_sub_field('texto_boton');
					$url_boton  = get_sub_field('url_boton');

				?>
        <div class="ambientes--col1 btn">
          <a href="<?php echo $url_boton; ?>" title="<?php echo $texto_boton; ?>" target="_blank"><?php echo $texto_boton; ?></a>
        </div>
        <?php

    endwhile;
  endif;
?>
    </div>
    <div class="ambientes--co2">
      <h3><?php echo $subtitulo_col2; ?></h3>
      <?php
      if($botones_col2):
        while(have_rows('botones_col2')): the_row();

          $texto_boton = get_sub_field('texto_boton');
          $url_boton  = get_sub_field('url_boton');

        ?>
        <div class="ambientes--col2 btn">
          <a href="<?php echo $url_boton; ?>" title="<?php echo $texto_boton; ?>" target="_blank"><?php echo $texto_boton; ?></a>
        </div>
        <?php

    endwhile;
  endif;
?>
    </div>
  </div>
</section>
