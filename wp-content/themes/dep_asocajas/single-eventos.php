<?php get_template_part('includes/header'); 

if(have_posts()): 
	while(have_posts()): the_post(); 
		get_template_part('includes/eventos/evento', 'header');
		get_template_part('includes/eventos/evento', 'contenido');
		get_template_part('includes/eventos/evento', 'ponentes');
		get_template_part('includes/eventos/evento', 'agenda');
	endwhile; 
endif; 

get_template_part('includes/footer'); ?>