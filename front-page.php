<?php
    get_header();
?>

<header id="home-header">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-md-7 py-sm-5 py-2 mt-sm-5 mt-2 ps-sm-0 ps-4">
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('internactional-header-logo'))?>" class="w-50 py-2" alt="">
                <h1 class=" fw-bold py-2 text-light"><?php echo get_theme_mod('internactional-header-headline') ?></h1>
                <a href="<?php echo get_permalink(get_theme_mod('internactional-header-cta-link')) ?>" class="btn btn-light btn-lg mt-4"><?php echo get_theme_mod('internactional-header-cta-text') ?></a>
            </div>
        </div>
    </div>
</header>


<main>
    <!-- FLEXIBLE, IMPACTFUL, INTERNATIONAL -->
    <div class="pale-bg">
        <div class="container py-5">
            <div class="row about justify-content-center py-5">
                <div class="col-md-4 col-sm-10 py-2">
                    <div class="card h-100 p-4">
                        <div class="card-body ">
                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('intact-home-row1-box1-image')) ?>" class="mx-auto d-block mb-4 px-md-0 px-sm-4 px-5" alt="">
                        <h5 class="card-title mb-2"><?php echo get_theme_mod('intact-home-row1-box1-title')?></h5>
                        <p class="card-text"><?php echo get_theme_mod('intact-home-row1-box1-text')?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-10 py-2">
                    <div class="card h-100 p-4">
                        <div class="card-body">
                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('intact-home-row1-box2-image')) ?>" class="mx-auto d-block mb-4 px-md-0 px-sm-4 px-5" alt="">
                            <h5 class="card-title mb-2"><?php echo get_theme_mod('intact-home-row1-box2-title')?></h5>
                            <p class="card-text"><?php echo get_theme_mod('intact-home-row1-box2-text')?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-10 py-2">
                    <div class="card h-100 p-4">
                        <div class="card-body">
                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('intact-home-row1-box3-image')) ?>" class="mx-auto d-block mb-4 px-md-0 px-sm-4 px-5" alt="">
                            <h5 class="card-title mb-2"><?php echo get_theme_mod('intact-home-row1-box3-title')?></h5>
                            <p class="card-text"><?php echo get_theme_mod('intact-home-row1-box3-text')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>           
    </div>

    <!-- STORIES -->
    <div class="white-bg">
        <div class="container py-5">
            <div class="row stories justify-content-center">
                <h2 class="mb-4">Stories</h2>
                <?php
                    $query = new WP_Query( array('category_name' => 'stories', 'posts_per_page' => get_theme_mod('intact-stories-amount')));
                    if( $query->have_posts() ) {
                        while( $query->have_posts() ) {
                            $query->the_post();
                            get_template_part('template-parts/content', 'featured');
                        }
                    }
                ?>
            </div>
            <div class="d-flex justify-content-center">
                <a href="<?php echo get_bloginfo('url').get_theme_mod('intact-stories-button-link'); ?>" class="btn btn-primary btn-lg my-5">
                    <?php echo get_theme_mod('intact-stories-button-text') ?>
                </a>
            </div>                   
        </div>           
    </div>


    <!-- MORE: -->
    <div class="pale-bg more">
        <div class="container py-5">
            <div class="row pt-5 justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card p-sm-5 pt-3 pb-5 px-0">
                        <div class="card-body px-4">
                            <h2><?php echo get_theme_mod('intact-more-box1-title') ?></h2>
                            <p><?php echo get_theme_mod('intact-more-box1-text') ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-lg-7 col-md-8 ">
                    <div class="card p-sm-5 pt-3 pb-5 px-0">
                        <div class="card-body px-4">
                            <h2><?php echo get_theme_mod('intact-more-box2-title') ?></h2>
                            <ul>
                                <?php echo get_theme_mod('intact-more-box2-text') ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="card p-sm-5 pt-3 pb-5 px-0">
                        <div class="card-body px-4">
                            <h2><?php echo get_theme_mod('intact-more-box3-title') ?></h2>
                            <ol>
                                <?php echo get_theme_mod('intact-more-box3-text') ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="<?php echo get_permalink(get_theme_mod('intact-more-button-link'))?>" class="btn btn-primary btn-lg mt-1 mb-5"><?php echo get_theme_mod('intact-more-button-text') ?></a>
            </div> 
        </div>
    </div>

    <!-- REVIEWS -->
    <div class="white-bg">
        <div class="container py-5">
            <div class="row about justify-content-center py-5">
                <div class="col-md-4 col-sm-10 py-2">
                    <div class="card h-100 p-4 ">
                        <div class="card-body d-flex align-items-start flex-column">
                            <p class="card-text"><i><?php echo get_theme_mod('intact-reviews-box1-text') ?></i></p>
                            <div class="d-flex mt-auto align-items-center">
                                <div class="reviewer-image">
                                    <img class="w-100" src="<?php echo wp_get_attachment_url(get_theme_mod('intact-reviews-box1-image')) ?>" alt="">
                                </div>
                                <div class="reviewer-info">
                                    <p><strong><?php echo get_theme_mod('intact-reviews-box1-author') ?></strong></p>
                                    <p><?php echo get_theme_mod('intact-reviews-box1-occupation') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-10 py-2">
                    <div class="card h-100 p-4">
                        <div class="card-body d-flex align-items-start flex-column">
                            <p class="card-text"><i><?php echo get_theme_mod('intact-reviews-box2-text') ?></i></p>
                            <div class="d-flex mt-auto align-items-center">
                                <div class="reviewer-image">
                                    <img class="w-100" src="<?php echo wp_get_attachment_url(get_theme_mod('intact-reviews-box2-image')) ?>" alt="">
                                </div>
                                <div class="reviewer-info">
                                    <p><strong><?php echo get_theme_mod('intact-reviews-box2-author') ?></strong></p>
                                    <p><?php echo get_theme_mod('intact-reviews-box2-occupation') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-10 py-2">
                    <div class="card h-100 p-4">
                        <div class="card-body d-flex align-items-start flex-column">
                            <p class="card-text"><i><?php echo get_theme_mod('intact-reviews-box3-text') ?></i></p>
                            <div class="d-flex mt-auto align-items-center">
                                <div class="reviewer-image">
                                    <img class="w-100" src="<?php echo wp_get_attachment_url(get_theme_mod('intact-reviews-box3-image')) ?>" alt="">
                                </div>
                                <div class="reviewer-info">
                                    <p><strong><?php echo get_theme_mod('intact-reviews-box3-author') ?></strong></p>
                                    <p><?php echo get_theme_mod('intact-reviews-box3-occupation') ?></p>
                                </div>
                            </div>
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