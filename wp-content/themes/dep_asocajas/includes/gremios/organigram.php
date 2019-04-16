<?php
/*
	estructura_organizacional
*/

	$estructura_organizacional = get_field('estructura_organizacional');
	$imagen_directivos_mobile = get_field('imagen_directivos_mobile');
	if($estructura_organizacional):
?>
	<section id="Organigram">
		<figure class="organigram-item">
			<img src="<?php echo $estructura_organizacional; ?>" alt="Organigrama Asocajas" class="visible-desktop">
			<img src="<?php echo $imagen_directivos_mobile; ?>" alt="Organigrama Asocajas" class="visible-mobile">			
		</figure>		
	</section>
<?php
	endif;
?>

