<?php
/*
	Campos

  cifra1
  cifra2
  cifra3
*/


  $cifra1 = get_field('cifra1');
  $cifra2 = get_field('cifra2');
  $cifra3 = get_field('cifra3');

	?>
<section id="cifras-animadas">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php echo $cifra1; ?>
        <?php echo $cifra2; ?>
      </div>
      <div class="col-md-6">
        <h1>cifras</h1>
        <?php echo $cifra3; ?>
      </div>
    </div>
  </div>
</section>
