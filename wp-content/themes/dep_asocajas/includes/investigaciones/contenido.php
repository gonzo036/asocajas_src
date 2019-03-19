<?php
// investigacion

/*
	Variables
	primer_icono
  texto_principal
  segundo_icono


*/

$primer_icono = get_field('primer_icono');
$texto_principal = get_field('texto_principal');
$segundo_icono = get_field('segundo_icono');

?>

<?php

setlocale(LC_MONETARY, 'es_CO');

$args = array(
  'post_type' => 'investigaciones',
  'posts_per_page' => 10);

$query = new WP_Query($args);

if($query->have_posts()):
  while($query->have_posts()): $query->the_post();

  /* Variables of post
    icono_color
    icono_blanco
    archivo (field_repeater)
  */

  $icono_color = get_field('icono_color');
  $icono_blanco  = get_field('icono_blanco');

?>

<section id="tipo-contenido" class="investigaciones">
  <div class="investigaciones-block" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
      <img src="<?php echo $icono_color ?>" alt="">
      <h2><?php the_title();?></h2>
  </div>
</section>
