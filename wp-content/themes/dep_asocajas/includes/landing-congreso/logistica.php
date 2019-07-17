<?php
/*
	Campos
  item-logistico (field_repeater)

*/
	$item_logistico= get_field('item-logistico');

  if($item_logistico):
	?>

  <section id="logistica-block">
<div class="container">
  <div class="row">
    <header>
      <h2>LOGISTICA</h2>
    </header>

  </div>
  <div class="row">
    <?php

      while(have_rows('item-logistico')): the_row();
        $titulo = get_sub_field('titulo');
        $logo = get_sub_field('logo');
        $informacion = get_sub_field('informacion');
    ?>
    <div class="item-logistico">
      <h3><?php echo $titulo; ?></h3>
      <img src="<?php echo $logo; ?>" alt="">
      <div class="informacion-logistica">
        <?php echo $informacion; ?>
      </div>
    </div>
    <?php
      endwhile;
    ?>
  </div>

</div>

  </section>
  <?php
  endif;
