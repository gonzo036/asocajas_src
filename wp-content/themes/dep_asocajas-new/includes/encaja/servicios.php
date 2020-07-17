<section id="servicios">
  <div class="servicios__wrapper">
    <?php
     while(have_rows('servicios')): the_row();
     ?>
      <div class="servicios__wrapper-item">
        <figure>
          <img src="<?php the_sub_field('imagen') ?>" alt="">
        </figure>
        <div class="servicios__wrapper-item-info">
         <?php the_sub_field('informacion') ?>
        </div>
      </div>
    <?php endwhile;?>
  </div>
</section>
