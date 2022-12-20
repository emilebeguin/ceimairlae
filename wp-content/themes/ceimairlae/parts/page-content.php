    <section class="content">
        <?php if (is_page('rsvp') || is_page('repondre')):
            // echo do_shortcode("[ninja_form id='2']");
            the_content();
        elseif (is_page('travel-to-dublin') || is_page('se-rendre-a-dublin')):
            the_content();
            ?><h2><?php pll_e('Recommendations') ?></h2><?php
            get_template_part('parts/recommendations');
            ?><h2><?php pll_e('Venues') ?></h2><?php
            get_template_part('parts/venues');
        else:
            the_content();
        endif;
        ?>
    </section>
</section>