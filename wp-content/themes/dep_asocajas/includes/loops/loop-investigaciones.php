<?php
//

/*
	Variables
	titulo_principal
  contenido_col1
  iconos_col2 (field_repeater)
  titulo_categorias
  iconos_categorias (field_repeater)


*/

$icono_color = get_field('icono_color');
$icono_blanco = get_field('icono_blanco');
$archivo = get_field('archivo');

?>

<?php
$args = array( 'post_type' => 'product', 'posts_per_page' => 10 );
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
?>
<div class="block-categoria"style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">>
  <?php if($icono_color): ?>
    <img src="<?php echo $icono_color; ?>" alt="">
							<?php endif; ?>
  <h2><?php the_title();?></h2>
</div>

<?php
endwhile;
wp_reset_query();