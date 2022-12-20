<!DOCTYPE html>
<html lang="<?php echo pll_current_language(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/img/favicon/favicon-16x16.png" sizes=16x16>
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/img/favicon/favicon-32x32.png" sizes=32x32>
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/img/favicon/android-chrome-192x192.png" sizes=192x192>
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/img/favicon/android-chrome-512x512.png" sizes=512x512>
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url') ?>/img/favicon/apple-touch-icon.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- map -->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.8.0/leaflet.css" />

    <!-- main styles -->
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/ceimairlae.min.css" />

    <?php wp_head(); ?>

    <title><?php bloginfo('name')?> – <?php if (get_the_title()): the_title(); else: bloginfo('description'); endif; ?></title>
</head>
<body class="<?php
    /* general content classes for the body*/
	if (     is_single() ): echo 'inner'; // article
    elseif ( is_page() )  : echo 'page';  // page
    elseif ( is_home() )  : echo 'home';  // home
    else                  : echo 'page';  // autres
    endif;
    /* specific classes for the body */
    if ( is_page('faq') || is_page('questions-frequentes') ) : echo ' faq';
    elseif ( is_page('photos') || is_page('les-photos') ) : echo ' photos';
    endif;
?>">