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
?>

<?php if($sesiones_agenda): ?>
	<section id="eventAgenda">
		<div class="event-agenda container">
			<?php while(have_rows('sesiones_agenda')): the_row(); 
				$encabezado_agenda = get_sub_field('encabezado_agenda');
				$subtitulo_de_sesion = get_sub_field('subtitulo_de_sesion');
				$items_agenda = get_sub_field('items_agenda');
			?>
			<div class="event-agenda-item">
				<div class="event-agenda-item-heading">
					<h3><?php echo $encabezado_agenda; ?></h3>
					<h4><?php echo $encabezado_agenda; ?></h4>
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
								<td><?php echo $horas ?></td>
								<td><?php echo $nombre_ponente ?></td>
								<td><?php echo $cargo_ponente ?></td>
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