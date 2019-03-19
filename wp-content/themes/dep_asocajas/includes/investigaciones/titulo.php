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

<section id="investigacion-titulo" class="container">
  <div class="block1">
        <div class="block1--icono1">
            <img src="<?php echo $primer_icono; ?>" alt="">
        </div>
        <div class="block1--text">
          <?php echo $texto_principal; ?>
         </div>
         <div class="block1--icono2">
             <img src="<?php echo $segundo_icono; ?>" alt="">
         </div>
  </div>

</section>
