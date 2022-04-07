<section class="main">
    <section class="top-image">
        <div class="img-wrapper"><img src="
            <?php
            if (CFS()->get( 'hero_image' )): echo CFS()->get( 'hero_image' );
            else: bloginfo('template_directory'); echo '/img/photos/header-single.jpg'; endif;?>"
            alt="<?php the_title() ?>">
        </div>
    </section>