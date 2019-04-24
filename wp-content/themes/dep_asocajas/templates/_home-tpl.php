<?php

/*
  Template Name: Home Template
*/

	get_template_part('includes/header');

		/*Slider*/
		get_template_part('includes/home/slider');

		/*Noticias*/
		get_template_part('includes/loops/loop','home-posts');

		/*Event*/
		get_template_part('includes/home/event');

		/*revistas*/
		get_template_part('includes/home/revista');

		/*Numbers*/
		get_template_part('includes/home/numbers');

		/*Timeline*/
		get_template_part('includes/home/timeline');


	get_template_part('includes/footer');
