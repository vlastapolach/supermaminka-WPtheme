<?php get_header(); ?>

  <!-- Jumbotron -->
  <header>
    <div class="container-fluid">
      <div class="jumbotron text-center" id="jumbo-blog">
        <h1>Blog</h1>
      </div>
    </div>
  </header>
  <section id="content">
  <div class="container">
    <!-- Úvodní video -->
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
        <?php
       if ( have_posts() ) : while ( have_posts() ) : the_post();

         get_template_part( 'content', get_post_format() );

       endwhile; endif;
     ?>
</div></div></div>
</section>

  <?php get_footer(); ?>
