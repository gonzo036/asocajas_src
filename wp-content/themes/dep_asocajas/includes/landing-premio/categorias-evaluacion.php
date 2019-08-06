<?php
/*
	Campos
  categorias_de_evaluacion (field_repeater)
    -titulo_categoria
    -infografia
    -descripcion


*/
	$categorias_de_evaluacion= get_field('categorias_de_evaluacion');


	?>
  <section id="categorias">
    <div class="categorias">
			
		<header class="categorias__header container">
			<span>
				<div class="icono-header">
					<img src="<?php bloginfo('template_url')?>/img/icono-criteriosevaluacion.png" alt="">
				</div>
				<h3>CATEGORÍAS DE EVALUACIÓN</h3>
			</span>
		</header>
		<div class="categorias__wrapper container">
			<ul class="nav nav-pills categorias__wrapper-pills">
				<?php
				 $cont=0;
					while(have_rows('categorias_de_evaluacion')): the_row();

					$cont++;
				?>
				<?php if ($cont==1): ?>

				 <li class="active"><a data-toggle="pill" href="#menu<?php echo $cont ?> "><?php the_sub_field('titulo_categoria'); ?></a></li>

			 <?php else: ?>
				<li><a data-toggle="pill" href="#menu<?php echo $cont; ?>"><?php the_sub_field('titulo_categoria'); ?></a></li>
				<?php
				 endif;
				?>
				<?php
					endwhile;
				?>
			</ul>
			<!--Tab body-->
			<div class="tab-content categorias__wrapper-tabs">

				<?php
				$cont=0;
				$active='in active';
				while(have_rows('categorias_de_evaluacion')): the_row();
					$infografia = get_sub_field('infografia');
					$descripcion= get_sub_field('descripcion');
					$cont++;
				?>
	 			 <?php if ($cont==1): ?>
	 			 <div id="menu<?php echo $cont;  ?>" class="tab-pane fade <?php echo $active; ?>">
					 <div class="categorias__wrapper-tabs__item categoria-item">
						 <div class="categoria-infografia">
							 <figure>
									<img src="<?php echo $infografia; ?>" alt="">
							 </figure>
						 </div>
						 <div class="categoria-info">
						 	<?php echo $descripcion; ?>
						 </div>
					 </div>
	 			 </div>
	 			 <?php else: ?>
	 			 <div id="menu<?php echo $cont;  ?>" class="tab-pane fade">
					<div class="categorias__wrapper-tabs__item categoria-item">						
						<div class="categoria-infografia">
							<figure>
								<img src="<?php echo $infografia; ?>" alt="">
							</figure>
						</div>
						<div class="categoria-info">
							<?php echo $descripcion; ?>
						</div>						
					</div>
	 			 </div>
	 			 <?php
	 				endif;
	 			 ?>
	 			 <?php
	 				endwhile;
	 			 ?>

	 		</div>

		</div>
		
    </div>
  </section>
