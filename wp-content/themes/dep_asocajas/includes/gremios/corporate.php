<?php
/*
	Campos mision vision

	fondo_mision
	mision

	fondo_vision
	vision

*/

	$fondo_mision = get_field('fondo_mision');
	$mision = get_field('mision');
	$fondo_vision = get_field('fondo_vision');
	$vision = get_field('vision');

	if($fondo_mision):

	?>
	
	<section id="CorporateValues">
		<div class="corporate-value" style="background-image: url('<?php echo $fondo_mision; ?>')">
			<img src="<?php echo $fondo_mision; ?>" alt="Mision">
			<div class="corporate-value--caption">
				<?php echo $vision; ?>
			</div>
		</div>
		<div class="corporate-value" style="background-image: url('<?php echo $fondo_vision; ?>')">
			<img src="<?php echo $fondo_mision; ?>" alt="vision">
			<div class="corporate-value--caption">
				<?php echo $vision; ?>
			</div>
		</div>
		
	</section>

	<?php
	endif;