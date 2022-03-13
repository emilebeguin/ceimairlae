<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<!-- map -->
    <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <!-- main styles -->
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/ceimairlae.min.css" />

    <?php wp_head(); ?>

    <title><?php bloginfo('name')?></title>
</head>
<body class="home">

    <header>
		<div class="logo">
			<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url')?>/img/celtic-love-cross-bw.png" title="Celtic love cross" alt="Celtic love cross"/></a>
			<p><?php bloginfo('description')?></p>
		</div>

		<div id="menu_icon"></div>
		<nav>
			<ul>
                <li>
                    <a href="<?php echo home_url(); ?>">Home</a>
                </li>
                <!-- code de la moulinette -->
                <?php $loop = new WP_Query( array(
                            'post_type' => 'page', // Va rechercher le type de contenu “page”
                            'posts_per_page' => -1, // Affiche tout sans limite 
                            'offset' => 3, // Commence la boucle après avoir "passé" les 3 premiers
                            'orderby' => 'name', // Ordonne par le nom de l'élément
                            'order' => 'ASC', // Chronologique ou pas (DESC)
                                ));?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <!-- section à mouliner -->
                            <li>
                                <a href="<?php the_permalink()?>"><?php the_title();?></a>
                            </li>

                        <?php endwhile;
                    wp_reset_query(); ?>
			</ul>
		</nav>

		<div class="footer clearfix">

			<div class="rights">
				<p>Copyright © 2022 Émile Beguin.</p>
				<!-- <p>Template by <a href="">Pixelhint.com</a></p> -->
			</div>
		</div >
	</header>