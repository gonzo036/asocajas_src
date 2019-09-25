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
<section>
	<div class="memorias text-center">
		<div class="patrocinadores-header">
			<header>
				<h2>MEMORIAS</h2>
			</header>

		</div>
		<div class="event-info-cta">
			<a href="http://asocajas.org.co/sitio2018congreso/#memorias"> <h3>VER MEMORIAS</h3> </a>
		</div>
	</div>
</section>
