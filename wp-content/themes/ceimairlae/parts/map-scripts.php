<!-- map scripts -->
<script src ="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/map-init.min.js" siteurl="<?php bloginfo('template_directory')?>"
	<?php $loop = new WP_Query( array(
			'post_type' => 'venue', // Va rechercher le type de contenu 'venue'
			'post_name__in' => array( 'saint-pius', 'nolita', 'fallon-byrne' ) // d'après le slug
		));?>
		<?php
			while ( $loop->have_posts() ) : $loop->the_post();
			// assignation d'un un nombre pour le tag (mieux lisible par le JS)
			$ID = get_the_ID(); $nb; switch($ID): case 28: $nb = 1; break; case 27: $nb = 2; break; case 23: $nb = 3; break; endswitch;
		?>
		
		map-popupText-<?php echo $nb ?>='<?php the_content() ?>
		<a href="<?php the_permalink() ?>" class="button more">&#xf067;</a>'

		<?php endwhile;
	wp_reset_query(); ?>>
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/leaflet-providers.min.js"></script>