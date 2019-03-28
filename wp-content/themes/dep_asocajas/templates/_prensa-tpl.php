<?php

/*
  Template Name: Sala de Prensa Template
*/

	get_template_part('includes/header');

	/*Noticias*/
	get_template_part('includes/loops/loop','posts');

	/*Videos*/
	get_template_part('includes/loops/loop','videos');

	/*Galleries*/
	get_template_part('includes/loops/loop','galleries');


	get_template_part('includes/footer');