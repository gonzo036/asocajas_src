<?php
	/*
		Campos
		logos_patrocinadores
       logo
	*/

	$logos_patrocinadores= get_field('logos_patrocinadores');
?>
<section id="patrocinadores">
  <div class="container patrocinadores">
    <div class="patrocinadores-header">
      <header>
        <h2>PATROCINADORES</h2>
      </header>

    </div>
    <div class="patrocinadores__wrapper">
      <?php
        while (have_rows('logos_patrocinadores')): the_row();
          $logo = get_sub_field('logo');
       ?>
       <div class="patrocinadores__wrapper-item">
         <img src="<?php echo $logo; ?>" alt="">
       </div>
       <?php
         endwhile;
       ?>
    </div>
  </div>
</section>
