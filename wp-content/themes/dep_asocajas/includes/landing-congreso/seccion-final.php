<?php
/*
	Campos
  titulo
  descripcion
  imagen

*/
	$titulo= get_field('titulo');
  $descripcion= get_field('descripcion');
  $imagen= get_field('imagen');


	?>
  <section id="seccion-final">
		<div class="container seccion-final">
      <div class="titulo-seccion-final">
        <header>
          <h2><?php echo $titulo; ?></h2>
        </header>

      </div>
      <div class="row">

        <div class="col-md-6">
          <?php echo $descripcion; ?>
        </div>
        <div class="col-md-6">
          <img src="<?php echo $imagen; ?>" alt="" width="100%" height="auto">
        </div>

      </div>
    </div>
  </section>
