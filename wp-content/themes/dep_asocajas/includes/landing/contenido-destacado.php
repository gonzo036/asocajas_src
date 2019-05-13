<?php
/*
	Campos
  Titulo
  Contenido
  Item-destacado (field_repeater)


*/

	$titulo = get_field('titulo');
  $contenido = get_field('contenido');
  $item_destacado = get_field('item_destacado')


	?>

  <section id="destacado">
    <div class="container-fluid destacado">
			<div class="row">
				<div class="col-md-6 destacado-texto">
					<h1><?php echo $titulo ?></h1>
					<p><?php echo $contenido; ?></p>
				</div>
				<div class="col-md-6 destacado-item">
					<?php
          if ($item_destacado):
					while(have_rows('item_destacado')): the_row();
		      	$texto = get_sub_field('texto');
						$imagen = get_sub_field('imagen');
					?>
					<?php if($texto || $imagen): ?>
					<div class="item">
						<p><?php echo $texto; ?></p>
						<img src="<?php echo $imagen; ?>" alt="">
					</div>
					<?php endif; ?>

					<?php
						endwhile;
					endif;
					?>
				</div>
			</div>

    </div>
  </section>
