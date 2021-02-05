<?php
    get_header();
?>

<main class="white-bg py-5">
    <div class="container pt-4 pb-3 px-4">
        <?php the_archive_title( '<h2 class="page-title">', '</h2>' ); ?>
    </div>

    <?php
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                
                get_template_part('template-parts/content', 'archive');

            }
        }
    ?>
</main>

<?php
get_footer();
?>