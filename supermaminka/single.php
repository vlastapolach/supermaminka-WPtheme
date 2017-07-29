<?php get_header(); ?>

  <!-- Jumbotron -->
  <header>
    <div class="container-fluid">
      <div class="jumbotron text-center">
        <?php
       if ( have_posts() ) : while ( have_posts() ) : the_post();

         get_template_part( 'content-single', get_post_format() );

       endwhile; endif;
     ?>

  <?php get_footer(); ?>
