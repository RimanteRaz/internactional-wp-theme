<?php /*Template Name: Contact Us*/ ?>
<?php
    get_header();
?>

<main>
    <div class="white-bg">
        <div class="container">
            <div class="row justify-content-center py-5">
                <div class="col-lg-7 col-md-8 col-sm-10">
                    <div class="card join-us-form px-sm-5 px-0 py-3">
                        <div class="card-body p-sm-4 p-3">
                            <?php if( is_active_sidebar('contact_1') ) : ?>
                                <?php dynamic_sidebar( 'contact_1' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row contacts py-5">
                <h3 class="mb-5">Or contact us directly</h3>
                <div class="col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="card px-3 h-100">
                        <div class="partner-logo-div">
                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('intact-contacts-box1-image')) ?>" class="card-img-top pt-4 px-3 mt-3" alt="...">
                        </div>
                        <div class="card-body px-3 pb-4">
                            <h6><?php echo get_theme_mod('intact-contacts-box1-title') ?></h6>
                            <p class="card-text"><?php echo get_theme_mod('intact-contacts-box1-text') ?></p>
                        </div>
                        </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="card px-3 h-100">
                        <div class="partner-logo-div">
                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('intact-contacts-box2-image')) ?>" class="card-img-top pt-4 px-3 mt-3" alt="...">
                        </div>
                        <div class="card-body px-3 pb-4">
                            <h6><?php echo get_theme_mod('intact-contacts-box2-title') ?></h6>
                            <p class="card-text mb-0"><?php echo get_theme_mod('intact-contacts-box2-text') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="card px-3 h-100">
                        <div class="partner-logo-div">
                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('intact-contacts-box3-image')) ?>" class="card-img-top pt-4 px-3 mt-3" alt="...">
                        </div>
                        <div class="card-body px-3 pb-4">
                            <h6><?php echo get_theme_mod('intact-contacts-box3-title') ?></h6>
                            <p class="card-text mb-0"><?php echo get_theme_mod('intact-contacts-box3-text') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="card px-3 h-100">
                        <div class="partner-logo-div">
                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('intact-contacts-box4-image')) ?>" class="card-img-top pt-4 px-3 mt-3" alt="...">
                        </div>
                        <div class="card-body px-3 pb-4">
                            <h6><?php echo get_theme_mod('intact-contacts-box4-title') ?></h6>
                            <p class="card-text mb-0"><?php echo get_theme_mod('intact-contacts-box4-text') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>