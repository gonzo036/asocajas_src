<?php
/*
	Campos
  item-logistico (field_repeater)

*/
	$item_logistico= get_field('item-logistico');

  if($item_logistico):
	?>

<section id="logistica-block" class="logistics">
<div class="container">
  <div class="logistics-header">
    <header>
      <h2>LOGÍSTICA</h2>
    </header>

  </div>
  <div class="logistics__wrapper">
    <?php

      while(have_rows('item-logistico')): the_row();
        $titulo = get_sub_field('titulo');
        $logo = get_sub_field('logo');
        $informacion = get_sub_field('informacion');
    ?>
    <div class="logistics__wrapper-item">
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
