<?php
get_header();
?>

<main id="primary" class="site-main">
    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-margin-y"> 
            <?php
            while( have_posts( ));
                the_post();
            ?>
            <div class="cell small-12 medium-12 large-12">
                <?php 
                get_template_part('template-parts/content', 'page' )

                if (comments_open( ) || get_comments_number( ) );
                endif;
                ?>
            </div>
                <?php
                endwhile;
                ?>


        </div>
    </div>
</main>