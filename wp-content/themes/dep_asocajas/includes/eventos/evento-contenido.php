<?php
	$hour  = get_field('hora');
	$date  = get_field('fecha');
	$city  = get_field('ciudad');
	$place = get_field('lugar');
	$price = get_field('precio');
?>
<section id="EventInfo" class="event-info">
	<div class="container event-wrapper">
		<div class="event-info-text">
			<?php the_content(); ?>
		</div>
		<div class="event-info-details">
			<h3>DETALLES</h3>
			<table>
				<?php if($hour): ?>
					<tr><td><strong>Hora:</strong></td><td><?php echo $hour; ?></td></tr>
				<?php endif; ?>
				<?php if($date): ?>
					<tr><td><strong>Fecha:</strong></td><td><?php echo $date; ?></td></tr>
				<?php endif; ?>
				<?php if($city): ?>
					<tr><td><strong>Ciudad:</strong></td><td><?php echo $city; ?></td></tr>
				<?php endif; ?>
				<?php if($place): ?>
					<tr><td><strong>Lugar:</strong></td><td><?php echo $place; ?></td></tr>
				<?php endif; ?>
				<?php if($price): ?>
					<tr><td><strong>Precio:</strong></td><td><?php echo $price; ?></td></tr>
				<?php endif; ?>
			</table>
			<div class="cta-actions">
				<a href="https://www.asistiendo.com/prod/0020101/0215W4R3O6/adm/login.asp?id=000001A0K2Q0X5E4S5D4G1U8J8E8F6W4R3O6" target="_blank">Inscripciones</a>
			</div>
		</div>
	</div>
</section>
