<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      
    <?php
    wp_head();
    ?>

</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light " <?php echo (is_admin_bar_showing()) ? ' style="top: 32px;"' : ''; ?>>
        
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_bloginfo('url'); ?>">
                <div class="d-flex align-items-center">
                    <img src="<?php echo get_site_icon_url() ?>"></img>
                    <span><?php echo get_bloginfo( 'name' ); ?></span>
                </div>
            </a>
            
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="navbar-nav ms-auto">%3$s</ul>'
                        )
                    );
                ?>

        </div>
    </nav>


    