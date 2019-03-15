<?php
// texts giass

/*
	Variables
	logo_principal
  texto_logo
  texto_col1
  texto_col2
  beneficios

*/

$logo_principal = get_field('logo_principal');
$texto_logo = get_field('texto_logo');
$texto_col1 = get_field('texto_col1');
$texto_col2 = get_field('texto_col2');
$beneficios = get_field('beneficios');

?>

<section id="giass-info" class="container">
  <div class="block1">
        <div class="block1--logo">
            <img src="<?php echo $logo_principal; ?>" alt="">
        </div>
        <div class="block1--text">
          <?php echo $texto_logo; ?>
         </div>
  </div>
  <div class="block2">
        <div class="block2--col1">
        <?php echo $texto_col1; ?>
        </div>
        <div class="block2--col2">
          <?php echo $texto_col2; ?>
         </div>
  </div>
  <div class="block3">
  <?php echo $beneficios; ?>
  </div>

</section>
