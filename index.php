<?php
    get_header();
?>


<div class="pt-5">
    <?php
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                
                get_template_part('template-parts/content', 'archive');

            }
        }
    ?>
</div>

<div class="container py-5">
    <?php
        the_posts_pagination();
    ?>
</div>
    

<?php
get_footer();
?>