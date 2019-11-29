<?php
/*
	Campos
  video

*/
	$id_video= get_field('id_video2');


	?>
  <section id="video">
		<div class="video-wrapper">

      <?php if($id_video): ?>
          <iframe width="100%" height="600px" src="https://www.youtube.com/embed/<?php echo $id_video; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
      <?php endif; ?>
    </div>
  </section>
