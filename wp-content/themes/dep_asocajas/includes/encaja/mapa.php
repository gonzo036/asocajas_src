<?php
//

/*
	Variables

titulo_mapa
banner_mapa
link_mapa
*/

$titulo_mapa = get_field('titulo_mapa');
$banner_mapa = get_field('banner_mapa');
$link_mapa = get_field('link_mapa');
?>
<section id="mapa" class="mapa">
  <div class="mapa-titulo">
    <h2><?php echo $titulo_mapa ?></h2>
  </div>
  <div class="mapa-banner">
    <a href="<?php echo $link_mapa ?>"><img src="<?php echo $banner_mapa; ?>" alt=""></a>
  </div>
</section>
