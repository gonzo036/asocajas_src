<?php

  $imagen_banner=get_field('imagen_acceso');
  $informacion=get_field('info_acceso');
 ?>

 <section id="acceso-giass">
   <div class="acceso__wrapper">
     <div class="acceso__wrapper-imagen">
       <img src="<?php echo $imagen_banner; ?>" alt="">
     </div>
     <div class="acceso__wrapper-info">
       <?php echo $informacion; ?>
     </div>
   </div>
 </section>
