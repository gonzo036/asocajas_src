<?php
/*
	Campos
  Tarifas (field_repeater)
	Forma de pago (field_repeater)
	procedimiento inscripcion

*/
	$tarifas= get_field('tarifas');
  $forma_de_pago= get_field('forma_de_pago');
  $procedimiento_inscripcion= get_field('procedimiento_inscripcion');


	?>
  <section id="block_sobre-congreso" class="sobre-congreso">
		<div class="sobre-congreso-title">
			<header>
				<h2>sobre el congreso</h2>
			</header>
		</div>
		<div class="sobre-congreso__wrapper">
			<div class="sobre-congreso-info sobre-congreso-info-left">
				<div class="sobre-congreso-info__item tarifa">
					<header>
						<h4>TARIFAS GENERALES DE INSCRIPCIÓN AL EVENTO </h4>
					</header>
					<?php

						while(have_rows('tarifas')): the_row();
							$descripcion = get_sub_field('descripcion');
							$valor = get_sub_field('valor');

					?>
					<div class="tarifa__wrapper-item">
						<p><?php echo $descripcion; ?></p>
						<p><?php echo $valor; ?></p>
					</div>
					<?php
						endwhile;
					?>
				</div>
				<div class="sobre-congreso-info__item payment_method">
					<header>
						<h4>FORMA DE PAGO </h4>
					</header>
					<div class="payment_subtitle">
						<h5>Cuentas bancarias habilitadas para pago de la inscripción</h5>
						<?php echo $forma_de_pago; ?>
					</div>

				</div>
			</div>
			<div class="sobre-congreso-info sobre-congreso-info-right">
				<div class="sobre-congreso-info__item">
					<header>
						<h4>PROCEDIMIENTO DE INSCRIPCIÓN</h4>
					</header>
					<?php echo $procedimiento_inscripcion; ?>
				</div>
			</div>
			<div class="sobre-congreso-info sobre-congreso-info-last">
				<div class="sobre-congreso-info__item tarifas">
					<header>
						<h4>REPORTE DE PAGOS REALIZADOS</h4>
					</header>
					<p>Con el propósito de aplicar el pago que se realice por la inscripción al evento, solicitamos enviar copia del soporte de pago, especificando el nombre de la persona a quien
	se le paga o número de factura al correo electronico <b>zrodriguez@asocajas.org.co</b></p>
				</div>
			</div>
		</div>


		<div class="sobre-congreso-terms">
			<img src="<?php bloginfo( 'template_url' )?>/logo.png" alt="asocajas">
			<p>Somos entidad gremial sin ánimo de lucro No contribuyente del impuesto de renta, ni de ICA , de acuerdo con los artículos 19 y 23 del Estatuto Tributario. Favor abstenerse de practicar
retención en la fuente según artículo 369 del Estatuto Tributario retención de ICA según Art. 39 Decreto 352/02.</p>
			<p>* Tratamiento datos personales
Con la firma del presente formulario autorizo a ASOCAJAS , a realizar el tratamiento de mis datos personales, para efectos del desarrollo de eventos académicos organizados por ASOCAJAS.</p>
		</div>
  </section>
