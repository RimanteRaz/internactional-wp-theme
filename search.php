<?php
    get_header();
?>


           
<div class="container pt-5 mt-5">
            <?php if ( have_posts() ) : ?>
 
                
                    <h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
                
 
 
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
 
                    <?php get_template_part( 'template-parts/content', 'archive' ); ?>
 
                <?php endwhile; ?>
 
            <?php else : ?>
                
                <div class="my-5 py-5">
                    <h2>No results</h2>
                    <p>We couldn't find any articles that matched your search request.</p>
                </div>

            <?php endif; ?>

</div>
<?php
get_footer();
?>