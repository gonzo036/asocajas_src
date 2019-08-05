<?php
/*
	Campos
  imagen_galardon
  texto_galardon


*/

	$imagen_galardon= get_field('imagen_galardon');
  $info_galardon= get_field('info_galardon');

	?>
  <section id="galardon-block">
		<div class="galardon">
			<div class="galardon--imagen">
				<figure>
					<img src="<?php echo $imagen_galardon; ?>" alt="">
				</figure>

			</div>
			<div class="galardon--text">
				<div class="icono-header">
					<img src="" alt="">
				</div>
				<div class="">
						<?php echo $info_galardon; ?>
				</div>

			</div>
		</div>

  </section>
