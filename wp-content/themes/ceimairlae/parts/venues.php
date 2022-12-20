<div class="thumbslist">
    <?php $loop = new WP_Query( array(
        'post_type' => 'venue',
        'orderby' => 'name', // Ordonne par le nom de l'élément
        'order' => 'ASC', // Chronologique ou pas (DESC)
    ));?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="thumb-box">
            <a href="<?php the_permalink();?>">
                <div class="thumbnail"><?php the_post_thumbnail();?></div>
                <div class="overlay-text">
                    <div class="title"><h4><?php the_title();?></h4></div>
                    <div class="description"><?php the_excerpt();?></div>
                </div>
            </a>
        </div>

    <?php endwhile;
    wp_reset_query(); // fin de la boucle ?>
</div>