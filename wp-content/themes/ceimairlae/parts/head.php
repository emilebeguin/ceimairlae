<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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