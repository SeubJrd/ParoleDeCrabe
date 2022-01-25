<?php
/*
Template Name: Base
*/
?>
<?php require 'components/header-two.php'; ?>
<div class="container zoneText">
<?php if(have_posts()) : 
  while(have_posts()) : the_post(); ?> 
    <?php the_content(); ?> 
  <?php endwhile; ?>
<?php endif; ?> 
</div>


<?php
get_footer();
