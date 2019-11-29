<?php
/*
	Campos
  Titulo
  Contenido
  Item-destacado (field_repeater)


*/



	?>

  <section id="destacado">
    <div class="container-fluid destacado" style="text-align: -webkit-center;">
      <header>
        	<h2>MEMORIAS</h2>
      </header>
      <div class="event-info-details">


      <?php while(have_rows('memorias')): the_row();
        $titulo_presentacion = get_sub_field('nombre_presentacion');
        $link_presentacion = get_sub_field('presentacion');
			?>
						<table>
    					<tbody><tr><td> <a href="<?php echo $link_presentacion; ?>" target="_blank"><?php echo $titulo_presentacion; ?></a></td></tr>
    			       </tbody>
            </table>
          <?php endwhile; ?>
			<div class="cta-actions2">
				<img src="https://www.asocajas.org.co/wp-content/uploads/2019/06/cursor-01.png" alt="">
				<p>Haz click sobre el contenido que quieres descargar</p>
			</div>
		</div>

    </div>
  </section>
