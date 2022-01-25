<?php
/* 
  Template Name: gallery
*/

get_header();
?>



<div class="container gallery">
        <div class="filter item-menu"><br>
            <h2>Les partenaires de Maison Ramel</h2>
            <ul>
            <?php while( have_rows('galerie') ) : the_row(); ?>
                <li data-filter=".<?php echo get_sub_field('class_categ'); ?>"><?= get_sub_field('category') ?></li>
            <?php endwhile; ?>
            </ul>
        </div>
           
            <div id="galleries" class="item-detail text-center">
                <?php while( have_rows('galerie') ) : the_row(); ?>
                    <?php 
                            $image = get_sub_field( 'image' );
                            if( $image ): ?>
                                <?php foreach( $image as $img ): ?>
                                    <a href="<?= $img; ?>" class="col-lg-4  col-md-3 col-sm-4 col-4 item <?php echo get_sub_field('class_categ'); ?>">
                                    <img class="gallery__img" src=" <?php echo $img; ?>" alt="">
                                    </a>
                                <?php endforeach; ?>
                        <?php endif; ?>

                <?php endwhile; ?>
            </div>
        </div>
       
<?php
get_footer();
