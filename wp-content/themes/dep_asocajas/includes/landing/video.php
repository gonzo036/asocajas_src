<?php
/*
	Campos
  video

*/

	$video = get_field('video');

	?>
  <section id="video">
    <div class="container-fluid video text-center">
      <video autoplay loop id="video-background" class="vdo-lnd" plays-inline controls>
              <source src="<?php echo $video; ?>" type="video/mp4">
      </video>
    </div>
  </section>
