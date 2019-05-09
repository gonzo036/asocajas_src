<?php
/*
	Campos
  video

*/

	$video = get_field('video');

	?>
  <section id="video">
    <div class="container video">
      <video autoplay loop id="video-background" muted plays-inline controls>
              <source src="<?php echo $video; ?>" type="video/mp4">
      </video>
    </div>
  </section>
