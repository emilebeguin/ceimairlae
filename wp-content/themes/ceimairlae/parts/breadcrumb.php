<section class="breadcrumb header">

    <h1><?php
            if (is_404()): pll_e('not-found-title');
            else: the_title();
            endif;
        ?></h1>
</section>