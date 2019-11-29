<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right');?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/favicon.png" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="landing navbar-default navbar-static-top nav-creamos">
  <div class="container-fluid nav-creamos-wrapper">
    <div class="nav-creamos-brand">
      <a href="<?php echo home_url('/'); ?>"> <img src="<?php echo home_url('/'); ?>wp-content/uploads/2019/11/Asset-17.png" alt=""> </a>
    </div>

    <div class="nav-creamos-menu" id="navbar">
      <?php
          wp_nav_menu( array(
              'menu'              => 'memorias',
              'theme_location'    => 'navbar-left',
              'depth'             => 2,
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
          );
        ?>
    </div><!-- /.navbar-collapse -->
    <div class="nav-creamos-sponsor">
      <a href="<?php echo home_url('/'); ?>"> <img src="<?php echo home_url('/'); ?>wp-content/uploads/2019/11/Asset-2.png" alt=""> </a>
    </div>

  </div><!-- /.container -->
</nav>

<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar,
then you probably don't require a site title. Alternatively you can use the example below.
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
