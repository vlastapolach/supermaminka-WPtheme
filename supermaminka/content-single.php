        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </header>
  <section id="content">
  <div class="container">
    <!-- Úvodní video -->
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2">
        <div class="video-iframe">
          <?php
          // check if the post has a Post Thumbnail assigned to it.
        if ( has_post_thumbnail() ) {
        	the_post_thumbnail();
        }
        ?>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 spacing-bottom">
      <?php
        the_content(); ?>
    </div>
  </div>
</div>
