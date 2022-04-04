    <section class="content">
        <?php if (is_page('rsvp')):
            echo do_shortcode("[ninja_form id='2']");
        endif;
        ?>
        <?php the_content() ?>
    </section>
</section>