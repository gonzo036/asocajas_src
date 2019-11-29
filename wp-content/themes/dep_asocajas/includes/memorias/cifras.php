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
  <div class="container cifras">
    <div class="row cifras-texto">
      <div class="col-md-7 cifras-texto--item">
        <?php echo $cifra1; ?>
        <div class="col-md-6 cifras-texto--item">
          <?php echo $cifra2; ?>
        </div>
        <div class="col-md-6 cifras-texto--item">
          <img src="https://www.asocajas.org.co/wp-content/uploads/2019/05/Tuercas-gif.gif" alt="gif asocajas" width="100%" height="auto">
        </div>

      </div>
      <div class="col-md-5 cifras-texto--item cifras-texto--item--big">
        <h1>cifras</h1>
        <?php echo $cifra3; ?>
      </div>
    </div>
  </div>
</section>
