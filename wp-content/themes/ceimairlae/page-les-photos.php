<?php get_template_part('parts/head') ?>
<?php get_template_part('parts/sidenav') ?>
<section class="main">
    <section class="top-image">
        <div class="img-wrapper"><img src="
            <?php
            if (CFS()->get( 'hero_image' )): echo CFS()->get( 'hero_image' );
            else: bloginfo('template_directory'); echo '/img/photos/header-single.jpg'; endif;?>"
            alt="Photos">
        </div>
    </section>
    <section class="breadcrumb header">
        <h1>Photos</h1>
    </section>
<?php get_template_part('parts/page-content') ?>
<?php get_footer() ?>