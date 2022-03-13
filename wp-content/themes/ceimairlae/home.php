<?php get_header() ?>
    <section class="container" id="home-map">
		<div id="map"></div>
    </section>

	<section class="container" id="rsvp">
		<div class="wrapper">
			<h2>Reply to the invitation <span>RSVP</span></h2>
			<a href="" class="button">Fill the form</a>
		</div>
    </section>

    <!-- scripts -->
    <script src ="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/map-init.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/leaflet-providers.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/scripts.min.js"></script>
<?php get_footer() ?>