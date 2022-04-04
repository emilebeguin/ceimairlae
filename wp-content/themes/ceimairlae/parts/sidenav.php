<header>
    <div class="logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url')?>/img/celtic-love-cross-red.png" title="Celtic love cross" alt="Celtic love cross"/></a>
        <p><?php bloginfo('description')?></p>
    </div>

    <div id="menu_icon"></div>
    <nav>
        <a href="<?php echo home_url(); ?>">Home</a>
        <!-- code de la moulinette -->
        <?php $loop = new WP_Query( array(
                    'post_type' => 'page', 
                    'posts_per_page' => -1,
                    'offset' => 3,
                    'orderby' => 'name',
                    'order' => 'ASC',
                        ));?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <?php $slug = get_post_field( 'post_name', get_post() ); ?>
                    <a href="<?php the_permalink() ?>"
                    <?php // si on est sur la home, RSVP devient un bouton animé
                    if(($slug == 'rsvp' || $slug == 'repondre') && is_home() ) {
                        echo 'class="button"';
                    }
                    ?>>
                        <?php the_title();?>
                    </a>
                <?php endwhile;
            wp_reset_query(); ?>
    </nav>

    <div class="footer clearfix">

        <div class="rights">
            <p>Copyright © 2022 Émile Beguin.</p>
            <!-- <p>Template by <a href="">Pixelhint.com</a></p> -->
        </div>
    </div >
</header>