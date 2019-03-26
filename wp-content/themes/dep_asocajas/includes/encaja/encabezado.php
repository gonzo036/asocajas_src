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
$iconos_categorias = get_field('iconos_categorias');


?>

<section id="encaja-entucaja" class="container">
  <header>
    <?php echo $titulo_principal; ?>
  </header>
  <div class="box">
    <div class="box-wrapf">
      <div class="box--col1">
        <?php echo $contenido_col1; ?>
      </div>
      <div class="box-col2">
        <?php
        if($iconos_col2):
          while(have_rows('iconos_col2')): the_row();
            $icono = get_sub_field('icono');
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
    <div class="box">
      <div class="box--cat">
        <?php
        if($iconos_categorias):
          while(have_rows('iconos_categorias')): the_row();

            $icono = get_sub_field('icono');
          ?>
          <div class="box--cat--img">
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
