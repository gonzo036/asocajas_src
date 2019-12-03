<?php

/*
  Template Name: Landing Memorias
*/
get_template_part('includes/memorias/header');

get_template_part('includes/memorias/video');

get_template_part('includes/loops/loop','videos-congreso2019');

get_template_part('includes/memorias/galeria');

get_template_part('includes/memorias/memorias');

?>
<div class="prefooter">
	<?php
	//get_template_part('includes/memorias/cifras');
	//get_template_part('includes/memorias/porcentajes');
	?>
</div>

<?php
get_template_part('includes/memorias/footer');
