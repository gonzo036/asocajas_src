<?php
//

/*
	Variables

banner_servicio
titulo_servicios
*/

$banner_servicio = get_field('banner_servicio');
$titulo_servicios= get_field('titulo_servicios');
?>

<section id="servicios" class="servicios">
  <div class="servicios-titulo">
    <h2><?php echo $titulo_servicios; ?></h2>
  </div>
  <div class="servicios-puzzle">
    <?php
    if($banner_servicio):
      while(have_rows('banner_servicio')): the_row();
        $banner_puzzle = get_sub_field('banner_puzzle');
        $infografia= get_sub_field('infografia');
      ?>
      <div class="servicios-puzzle banner">
        <img src="<?php echo $banner_puzzle; ?>" alt="">
      </div>
      <div class="servicios-puzzle info">
        <img src="<?php echo $infografia; ?>" alt="">
      </div>
      <?php
        endwhile;
      endif;
    ?>
  </div>
</section>
