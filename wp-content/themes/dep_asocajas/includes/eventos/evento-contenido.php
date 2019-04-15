<?php
	$hour  = get_field('hora');
	$date  = get_field('fecha');
	$city  = get_field('ciudad');
	$place = get_field('lugar');
	$price = get_field('precio');
?>
<section id="EventInfo" class="event-info">
	<div class="wrapper event-wrapper">
		<div class="event-info-text">
			<?php the_content(); ?>
		</div>
		<div class="event-info-details">
			<ul>
				<?php if($hour): ?>
					<li><strong>Hora:</strong><span><?php echo $hour; ?></span></li>
				<?php endif; ?>
				<?php if($date): ?>
					<li><strong>Fecha:</strong><span><?php echo $date; ?></span></li>
				<?php endif; ?>
				<?php if($city): ?>
					<li><strong>Ciudad:</strong><span><?php echo $city; ?></span></li>
				<?php endif; ?>
				<?php if($place): ?>
					<li><strong>Lugar:</strong><span><?php echo $place; ?></span></li>
				<?php endif; ?>
				<?php if($price): ?>
					<li><strong>Precio:</strong><span><?php echo $price; ?></span></li>
				<?php endif; ?>
			</ul>
			<div class="cta-actions">
				<a href="">Comprar Tiquete</a>
			</div>
		</div>
	</div>
</section>