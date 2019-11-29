<?php
//

/*
	Loop for Lnding Gallery

*/
$gallery_rep = get_field('items_galeria');

if($gallery_rep):

?>

	<section id="GalleryArticles" class="gallery-loop gallery-loop--memorias">
		<div class="container gallery-memorias">
			<header>
				<h2>Galería</h2>
			</header>
			<div class="gallery-memorias--wrapper">
				<?php 

					while(have_rows('items_galeria')): the_row();
						$img_gallery = get_sub_field('items_image');
						$txt_gallery = get_sub_field('items_text');
				?>
					<article class="gallery-loop-item" style="background-image: url('<?php echo $img_gallery; ?>')">
					    <a data-fancybox href="<?php echo $img_gallery; ?>" data-fancybox="gallery"></a>
					    <div class="caption">
					    	<h3><?php echo $txt_gallery; ?></h3>
					    </div>
					</article>
				<?php
					endwhile;
				?>
			</div>
		</div>
	</section>
<?php
endif;
