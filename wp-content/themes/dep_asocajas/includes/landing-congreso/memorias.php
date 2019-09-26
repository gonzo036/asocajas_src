<?php
/*
	Campos
  memoria (field_repeater)
      dia_fecha
      contenido (field_repeater)
          titulo
          descripcion
          youtube_id
          galeria (field_repeater)
              imeagen
*/


 ?>
 <section id="memorias">
   <div class="memorias">
     <div class="memorias_title">
       <header>
         <h2>memorias</h2>
       </header>
     </div>

      <div class="memoria-item">
        <?php

          while(have_rows('memoria')): the_row();
          $ano = get_sub_field('ano');
         ?>
        <div class="">
          <h3><?php the_sub_field('ano'); ?></h3>
        </div>
       <div class="memorias_content">
         <ul class="nav nav-pills">
           <?php
            $cont=0;
             while(have_rows('memorias')): the_row();

             $cont=$cont +1;
           ?>
           <?php if ($cont==1): ?>

            <li class="active"><a data-toggle="pill" href="#menu<?php echo $cont ?><?php echo $ano; ?>"><?php the_sub_field('dia_fecha'); ?></a></li>

          <?php else: ?>
           <li><a data-toggle="pill" href="#menu<?php echo $cont; ?><?php echo $ano; ?>"><?php the_sub_field('dia_fecha'); ?></a></li>
           <?php
            endif;
           ?>
           <?php
             endwhile;
           ?>

         </ul>
         <?php
           endwhile;
         ?>
         <div class="tab-content">

           <?php
            while(have_rows('memoria')): the_row();
            $ano2 = get_sub_field('ano');
           $cont=0;
           $active='in active';
             while(have_rows('memorias')): the_row();

             $cont=$cont +1;
           ?>
           <?php if ($cont==1): ?>
             <div id="menu<?php echo $cont;  ?><?php echo $ano2; ?>" class="tab-pane fade <?php echo $active; ?>">
                <?php
                  while(have_rows('contenido')): the_row();
                  $titulo = get_sub_field('titulo');
                  $descripcion = get_sub_field('descripcion');
                  $youtube_id = get_sub_field('youtube_id');
                  $galeria = get_sub_field('galeria');

                 ?>
                     <div class="item-memoria">
                         <header>
                           <h4><?php the_sub_field('titulo'); ?></h4>
                         </header>
                           <?php echo $descripcion; ?>
                           <div class="links-popup">
                             <?php
                              if($youtube_id):
                              ?>
                              <a href="#">ver video</a>
                              <?php endif; ?>
                               <?php
                               if($galeria):
                                ?>
                                <a href="#">ver galeria</a>
                              <?php endif; ?>
                           </div>
                      </div>
                      <?php
                        endwhile;
                      ?>
             </div>

           <?php else: ?>
             <div id="menu<?php echo $cont;  ?><?php echo $ano2; ?>" class="tab-pane fade">
                <?php
                  while(have_rows('contenido')): the_row();
                  $titulo = get_sub_field('titulo');
                  $descripcion = get_sub_field('descripcion');
                  $youtube_id = get_sub_field('youtube_id');
                  $galeria = get_sub_field('galeria');

                 ?>
                     <div class="item-memoria">
                         <header>
                           <h4><?php echo $titulo; ?></h4>
                         </header>
                           <?php echo $descripcion; ?>
                           <div class="links-popup">
                             <?php
                              if($youtube_id):
                              ?>
                              <a href="#">ver video</a>
                              <?php endif; ?>
                               <?php
                               if($galeria):
                                ?>
                                <a href="#">ver galeria</a>
                              <?php endif; ?>
                           </div>
                      </div>
                      <?php
                        endwhile;

                      ?>

             </div>
             <?php
              endif;
             ?>
             <?php
              endwhile;
             ?>


         </div>
         <?php
           endwhile;

         ?>
       </div>
      </div>

   </div>
 </section>
