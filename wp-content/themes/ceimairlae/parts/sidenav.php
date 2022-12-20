<header>
    <div class="nav-wrapper">
        <div class="logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url')?>/img/celtic-love-cross-red.png" title="Celtic love cross" alt="Celtic love cross"/></a>
            <p><?php bloginfo('description')?></p>
        </div>
        
        <nav class="clear-for-smartphone">
            <a href="<?php echo home_url(); ?>">
            <?php
                $default_home = 'Home';
                if (get_locale() == 'en_GB') {
                    echo 'Home';
                }
                elseif (get_locale() == 'fr_BE') {
                    echo 'Accueil';
                }
                else {
                    echo $default_home;
                }
            ?>
            </a>
            <!-- code de la moulinette -->
            <?php $loop = new WP_Query( array(
                        'post_type' => 'page', 
                        'posts_per_page' => -1,
                        'offset' => 3,
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'post__not_in' => [3 /*page privacy policy*/ ]
                            ));?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <?php $slug = get_post_field( 'post_name', get_post() ); ?>
                        <?php // restriction des slugs affichées
                            if(!($slug == 'coin-chorale' || $slug == 'choir-corner')
                            && !($slug == 'repondre' || $slug == 'rsvp')
                            && !($slug == 'offrir-un-cadeau' || $slug == 'give-a-gift')
                            && !($slug == 'details-de-votre-vol' || $slug == 'info-about-your-flight')
                            && !($slug == 'se-rendre-a-dublin' || $slug == 'travel-to-dublin')):
                        ?>
                        <a href="<?php the_permalink() ?>"
                        <?php // si on est sur la home, RSVP devient un bouton animé
                        if(($slug == 'les-photos' || $slug == 'photos') && is_home() ) {
                            echo 'class="button"';
                        }
                        ?>>
                            <?php the_title();?>
                        </a>
                        <?php endif; // fin restriction des slugs affichées ?>
                    <?php endwhile;
                wp_reset_query(); ?>
        </nav>

        <div class="footer">
            <?php if(!is_404()){
                wp_nav_menu([
                    'menu' =>  'Language Menu',
                    'container_class' =>  'languages',
                    'items_wrap' =>  '<ul id="%1$s" class="%2$s language-menu">%3$s</ul>',
                    // 'add_li_class'  => 'lang',
                    // 'link_class'   => 'to-locale'
                ]);
            } ?>
            <div class="rights">
                <p>Copyright © 2022 Émile Beguin.</p>
            </div>
        </div >
    </div>
</header>