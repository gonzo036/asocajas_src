<?php
/*
	estructura_organizacional
*/

	$estructura_organizacional = get_field('estructura_organizacional');

	if($estructura_organizacional):
?>
	<section id="Organigram">
		<figure class="organigram-item">
			<img src="<?php echo $estructura_organizacional; ?>" alt="Organigrama Asocajaz">
		</figure>		
	</section>
<?php
	endif;
?>

