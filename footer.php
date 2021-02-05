<footer class="pale-bg">
    <div class="container">
        <div class="row p-sm-5 px-2 py-5">
            <div class="col-md-5 col-sm-8">
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('intact-footer-logo')) ?>" class="w-75 mb-3"alt="">
                <p><?php echo get_theme_mod('intact-footer-text') ?></p>
            </div>
            <div class="col-md-4 col-sm-8 offset-lg-3 offset-md-2">
                <?php if( is_active_sidebar('footer_1') ) : ?>
                    <?php dynamic_sidebar( 'footer_1' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
    
    <?php
        wp_footer();
    ?>
    
</body>
</html>