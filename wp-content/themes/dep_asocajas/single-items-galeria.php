<?php get_template_part('includes/header'); ?>

<div class="container-fluid">
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <header>
    <h2><?php the_title(); ?></h2>
  </header>
  <div class="row gray-bg">
    <?php get_template_part('includes/loops/content', 'single-gallery'); ?>    
  </div><!-- /.row -->
  <?php endwhile; ?>
  <?php endif; ?>
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>