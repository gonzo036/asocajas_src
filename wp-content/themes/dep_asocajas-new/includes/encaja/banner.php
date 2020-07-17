<?php

  $imagen_banner=get_field('imagen_banner');
  $informacion=get_field('info_banner');
 ?>

 <section id="banner-encaja">
   <div class="encaja__wrapper">
     <div class="encaja__wrapper-imagen">
       <img src="<?php echo $imagen_banner; ?>" alt="">
     </div>
     <div class="encaja__wrapper-info">
       <?php echo $informacion; ?>
     </div>
   </div>
 </section>
