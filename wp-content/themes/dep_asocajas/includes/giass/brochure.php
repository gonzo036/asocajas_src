<?php
//

/*
	Variables
	imagen_brochure
  titulo_brochure
  texto_boton
  url_brochure


*/

$imagen_brochure = get_field('imagen_brochure');
$titulo_brochure = get_field('titulo_brochure');
$texto_boton = get_field('texto_boton');
$url_brochure = get_field('url_brochure');

?>
<section id="brochure" class="" style="background-image: url('<?php echo $imagen_brochure; ?>')">
  <div class="block-brochure">
    <h2><?php echo $titulo_brochure; ?></h2>
  </div>
  <div class="block-brochure btn">
    <a href="<?php echo $url_brochure; ?>" title="<?php echo $texto_boton; ?>" target="_blank"><?php echo $texto_boton; ?></a>
  </div>
</section>
