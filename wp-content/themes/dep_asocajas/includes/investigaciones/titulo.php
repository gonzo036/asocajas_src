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

if($primer_icono && $texto_principal && $segundo_icono):
?>

<section id="investigacion-titulo">
  <div class="hero container">
    <div class="hero--icon icon--1">
        <img src="<?php echo $primer_icono; ?>" alt="asocajas icono">
    </div>
    <div class="hero--caption">
    <?php echo $texto_principal; ?>
    </div>
    <div class="hero--icon icon--2">
       <img src="<?php echo $segundo_icono; ?>" alt="asocajas icono">
    </div>
  </div>
</section>

<?php 
endif;
