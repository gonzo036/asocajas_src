<?php
//

/*
	Variables
	titulo_principal
  contenido_col1
  iconos_col2 (field_repeater)
  titulo_categorias
  iconos_categorias (field_repeater)


*/

$titulo_principal = get_field('titulo_principal');
$contenido_col1 = get_field('contenido_col1');
$iconos_col2 = get_field('iconos_col2');
$titulo_categorias = get_field('titulo_categorias')
$iconos_categorias = get_field('iconos_categorias');

?>

<section id="encaja-entucaja" class="container">
  <div class="block-titulo">
    <?php echo $titulo_principal; ?>
  </div>
  <div class="block2">
    <div class="block2--col1">
      <?php echo $contenido_col1; ?>
    </div>
    <div class="block2-col2">
      <?php
      if($iconos_col2):
        while(have_rows('iconos_col2')): the_row();

          $texto_boton = get_sub_field('icono');
        ?>
        <div class="block2--col2 img">
          <img src="<?php echo $icono; ?>" alt="">
        </div>
        <?php

    endwhile;
  endif;
?>
    </div>
    <div class="block3">
      <?php echo $titulo_categorias; ?>
      <div class="block3--categoras">
        <?php
        if($iconos_col2):
          while(have_rows('iconos_col2')): the_row();

            $texto_boton = get_sub_field('icono');
          ?>
          <div class="block2--col2 img">
            <img src="<?php echo $icono; ?>" alt="">
          </div>
          <?php

      endwhile;
    endif;
  ?>
      </div>
    </div>
  </div>
</section>
