<?php get_header(); ?>

<div>
<?php if(have_posts()) : 
  while(have_posts()) : the_post(); ?> 
  <div>
    <?php the_content(); ?> 
    </div>
  <?php endwhile; ?>
<?php endif; ?> 
</div>
                
<?php
get_footer();
