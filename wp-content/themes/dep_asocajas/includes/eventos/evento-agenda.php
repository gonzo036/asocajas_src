<?php
	/*
		Campos agenda
		sesiones_agenda
			encabezado_agenda
			subtitulo_de_sesion
			items_agenda
				horas
				nombre_ponente
				cargo_ponente
	*/

	$sesiones_agenda = get_field('sesiones_agenda');
	$onoff = get_field('onoff');
?>
<?php if($onoff): ?>
<?php if($sesiones_agenda): ?>
	<section id="eventAgenda">
		<header>
			<h2>AGENDA</h2>
		</header>
		<div class="event-agenda container">
			<?php while(have_rows('sesiones_agenda')): the_row();
				$encabezado_agenda = get_sub_field('encabezado_agenda');
				$subtitulo_de_sesion = get_sub_field('subtitulo_de_sesion');
				$items_agenda = get_sub_field('items_agenda');
			?>
			<div class="event-agenda-item">
				<div class="event-agenda-item-heading">
					<h3><?php echo $encabezado_agenda; ?></h3>
					<h4><?php echo $subtitulo_de_sesion; ?></h4>
				</div>
				<div class="event-agenda-item-body">
					<?php if ($items_agenda): ?>
						<table class="event-agenda-item-body-table">
							<?php while(have_rows('items_agenda')): the_row();
								$horas = get_sub_field('horas');
								$nombre_ponente = get_sub_field('nombre_ponente');
								$cargo_ponente = get_sub_field('cargo_ponente');
							?>
							<tr>
								<td class="event-agenda-item-body-table-hour">
									<strong><?php echo $horas ?></strong>
								</td>
								<td class="event-agenda-item-body-table-name">
									<?php echo $nombre_ponente ?>
								</td>
								<td class="event-agenda-item-body-table-charge">
									<?php echo $cargo_ponente ?>
								</td>
							</tr>
							<?php endwhile;?>
						</table>
					<?php endif;?>
				</div>
			</div>
			<?php endwhile;?>
		</div>
	</section>
<?php endif;?>
<?php endif;?>
