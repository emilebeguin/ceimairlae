<!-- map scripts -->
<script src ="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.8.0/leaflet.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/map-init.min.js" siteurl="<?php bloginfo('template_directory')?>"
	<?php
		$venuesList;
		if (pll_current_language() == 'en') {
			$venuesList = array( 'saint-pius', 'nolita', 'fallon-byrne' ); // d'après le slug en anglais
		}
		else if (pll_current_language() == 'fr') {
			$venuesList = array( 'saint-pie-x-templeogue', 'nolita-fr', 'fallon-byrne-fr' ); // d'après le slug en anglais
		}
		$loop = new WP_Query( array(
			'post_type' => 'venue', // Va rechercher le type de contenu 'venue'
			'post_name__in' => $venuesList
		));?>
		<?php
			while ( $loop->have_posts() ) : $loop->the_post();
			// assignation d'un un nombre pour le tag (mieux lisible par le JS)
			$ID = get_the_ID(); $nb;
			/* 	28, 271 : St Pius
				27, 273 : Nolita
				23, 274 : F & B
			*/
			switch($ID):
				case 28: $nb = 1; break; case 27: $nb = 2; break; case 23: $nb = 3; break;
				case 271: $nb = 1; break; case 273: $nb = 2; break; case 274: $nb = 3; break;
			endswitch;
		?>
		
		map-popupText-<?php echo $nb ?>='
			<div class="img-wrapper venue">
				<a href="<?php the_permalink() ?>">
					<img src="<?php the_post_thumbnail_url() ?>" class="popup-image" alt="<?php the_title();?>">
				</a>
			</div>
			<p><?php the_excerpt() ?></p>
			<a href="<?php the_permalink() ?>" class="button more">&#xf067;</a>'

		<?php endwhile;
	wp_reset_query(); ?>>
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/leaflet-providers.min.js"></script>