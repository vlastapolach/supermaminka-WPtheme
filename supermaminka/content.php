  <?php if ( has_post_thumbnail() ) {?>
	<div class="row">
		<div class="col-md-4">
      <div class="spacing-photo">
			<a href="<?php the_permalink(); ?>"><?php	the_post_thumbnail(); ?></a>
    </div>
		</div>
		<div class="col-md-8">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
		</div>
	</div>
  <div class="spacing-blog"></div>

	<?php } else { ?>
    <h1><?php the_title(); ?></h1>
  </div>
</div>
</header>
	<?php the_content(); ?>
	<?php } ?>
