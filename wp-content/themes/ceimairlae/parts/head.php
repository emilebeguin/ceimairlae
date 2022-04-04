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

    <title><?php bloginfo('name')?> – <?php if (get_the_title()): the_title(); else: bloginfo('description'); endif; ?></title>
</head>
<body class="<?php
	if (     is_single() ): echo 'inner'; // article
    elseif ( is_page() )  : echo 'page';  // page
    elseif ( is_home() )  : echo 'home';  // home
    else                  : echo 'home';  // autres
    endif;
?>">