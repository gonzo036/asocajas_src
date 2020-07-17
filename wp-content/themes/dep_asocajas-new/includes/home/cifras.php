<?php
/*

titulo_cifras
cifras

*/

$titulo=get_field('titulo_cifras');
$cifras=get_field('cifras');
 ?>
 <section id="cifras">
   <div class="cifras_titulo">
     <header>
       <h2><?php echo $titulo; ?></h2>
     </header>
     <div class="cifras__wrapper">
       <?php while(have_rows('cifras')): the_row();
       $icono=get_sub_field('icono');
       $cifra=get_sub_field('cifra');
       $info=get_sub_field('info');

       ?>

         <div class="cifras__wrapper-item">
           <img src="<?php echo $icono; ?>" alt="">
           <h1><?php echo $cifra; ?></h1>
           <p><?php echo $info; ?></p>
         </div>
       <?php endwhile;?>
     </div>
   </div>
 </section>
