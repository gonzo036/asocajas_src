<?php
/*
	Campos
  banner

*/
	$banner= get_field('banner');


	?>
  <section id="banner-congreso">
		<div class="container banner">
      <?php if($banner): ?>
        <img src="<?php echo $banner; ?>" alt="" width="100%" height="auto">
      <?php endif; ?>
    </div>
  </section>
