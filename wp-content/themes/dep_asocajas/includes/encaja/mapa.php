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
  <header>
    <h2><?php echo $titulo_mapa ?></h2>
  </header>
  <div class="mapa-banner container">
    <a href="<?php echo $link_mapa ?>" target="_blank"><img src="<?php echo $banner_mapa; ?>" alt=""></a>
  </div>
</section>
