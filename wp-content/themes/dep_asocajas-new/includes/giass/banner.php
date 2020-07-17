<?php

  $imagen_banner=get_field('imagen_banner');
  $informacion=get_field('info_banner');
 ?>

 <section id="banner-giass">
   <div class="giass__wrapper">
     <div class="giass__wrapper-imagen">
       <img src="<?php echo $imagen_banner; ?>" alt="">
     </div>
     <div class="giass__wrapper-info">
       <?php echo $informacion; ?>
     </div>
   </div>
 </section>
