

 <section id="memorias">
   	<div class="memorias text-center">
   		<div class="patrocinadores-header">
   			<header>
   				<h2>MEMORIAS</h2>
   			</header>

   		</div>
   	</div>
   <div id="accordion">
  <div class="card">
    <?php
    $cont=0;
      while(have_rows('memoria')): the_row();
      $ano = get_sub_field('ano');
      $cont++;
     ?>
     <?php if($cont==1): ?>
    <div class="card-header" id="heading<?php echo $cont; ?>">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $cont; ?>" aria-expanded="true" aria-controls="collapse<?php echo $cont; ?>">
          <h2><?php echo $ano; ?></h2>

        </button>
      </h5>
    </div>

    <div id="collapse<?php echo $cont; ?>" class="collapse show" aria-labelledby="heading<?php echo $cont; ?>" data-parent="#accordion">
      <div class="card-body col-md-12">
        <?php
          while(have_rows('memorias')): the_row();


        ?>
        <div class="col-md-6">
          <h3><?php the_sub_field('dia_fecha'); ?></h3>

        <div class="content-memoria">
          <?php
            while(have_rows('contenido')): the_row();
            $titulo = get_sub_field('titulo');
            $descripcion = get_sub_field('descripcion');
            $youtube_id = get_sub_field('youtube_id');
            $galeria = get_sub_field('galeria');
            $presentacion = get_sub_field('presentacion');

           ?>
               <div class="item-memoria">
                   <header>
                     <h4><?php echo $titulo; ?></h4>
                     <hr>
                   </header>
                     <?php echo $descripcion; ?>
                     <div class="links-popup">
                       <?php
                        if($youtube_id):
                        ?>
                        <a href="https://www.youtube.com/watch?v=<?php echo $youtube_id; ?>" target="_blank">ver video</a>
                        <?php endif; ?>
                         <?php
                         if($galeria):
                          ?>
                          <a href="#">ver galeria</a>
                        <?php endif; ?>
                        <?php
                        if($presentacion):
                         ?>
                         <a href="<?php echo $presentacion; ?>" target="_blank">ver presentación</a>
                       <?php endif; ?>
                     </div>
                </div>
                <?php
                  endwhile;

                ?>
        </div>
        </div>
      <?php endwhile; ?>
      </div>
    </div>

  <?php else: ?>
    <div class="card-header" id="heading<?php echo $cont; ?>">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse<?php echo $cont; ?>" aria-expanded="false" aria-controls="collapse<?php echo $cont; ?>">
        <h2>  <?php echo $ano; ?></h2>
        </button>
      </h5>
    </div>

    <div id="collapse<?php echo $cont; ?>" class="collapse" aria-labelledby="heading<?php echo $cont; ?>" data-parent="#accordion">
      <div class="card-body col-md-12">
        <?php
          while(have_rows('memorias')): the_row();
        ?>
        <div class="col-md-6">
          <h3><?php the_sub_field('dia_fecha'); ?></h3>

        <div class="content-memoria">

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
                     <hr>
                   </header>
                     <?php echo $descripcion; ?>
                     <div class="links-popup">
                       <?php
                        if($youtube_id):
                        ?>
                        <a href="https://www.youtube.com/watch?v=<?php echo $youtube_id; ?>" target="_blank">ver video</a>
                        <?php endif; ?>
                         <?php
                         if($galeria):
                          ?>
                          <a href="#">ver galeria</a>
                        <?php endif; ?>
                        <?php
                        if($presentacion):
                         ?>
                         <a href="<?php echo $presentacion; ?>" target="_blank">ver presentación</a>
                       <?php endif; ?>
                     </div>
                  </div>
                  <?php
                    endwhile;

                  ?>

        </div>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
    <?php
     endif;
    ?>

  <?php endwhile; ?>
  </div>
</div>
 </section>
