<section id="entes-reguladores">
  <div class="entes__wrapper">
    <div class="entes__wrapper-titulo">
      <header>
        <h3><?php the_field('titulo') ?></h3>
      </header>
    </div>
    <?php
     while(have_rows('entes')): the_row();
     ?>
      <div class="entes__wrapper-item">
        <figure>
          <img src="<?php the_sub_field('imagen_ente') ?>" alt="">
        </figure>
      </div>
    <?php endwhile;?>
  </div>
</section>
