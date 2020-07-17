
<section id="banners">
  <div class="banner__wrapper">
    <?php
     while(have_rows('banner')): the_row();
     ?>
      <div class="banner__wrapper-item">
        <div class="imagen">
          <img src="<?php the_sub_field('imagen') ?>" alt="">
        </div>
        <div class="informacion">
          <?php the_sub_field('info') ?>
        </div>
      </div>
    <?php endwhile;?>
  </div>
</section>
