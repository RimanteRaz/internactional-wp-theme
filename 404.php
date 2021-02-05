<?php
    get_header();
?>

<div class="container error-404 mt-5 p-5">
    <h1 class="pt-5 mb-0">404</h1>
    <h3 class="m-0 pb-3">Page Not Found</h2>
    <div class="col-lg-4 col-md-6 col-12">
        <p class="mb-0">Sorry, we couldn't find what you were looking for.</p>
        <p>Go back to our <a href="<?php echo get_bloginfo('url'); ?>">homepage</a> or enter what you were looking for in the search box bellow.</p>
    </div>
    <div class="search py-3">
        <?php
        get_search_form();
        ?>
    </div>
    
</div>

   

<?php
get_footer();
?>