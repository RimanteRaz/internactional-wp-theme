<header class="post-img" style="background-image: linear-gradient(to top, rgba(66, 66, 104, 1.0),rgba(66, 66, 104, 0.4)), 
        url('<?php the_post_thumbnail_url(); ?>');"></header>
            

<main class="white-bg">
  <div class="container px-sm-5 p-0">
    <article class="blog-post mx-md-5">
        <h2><?php the_title(); ?></h2>
        <p class="meta mb-4">Published on <?php the_date(); ?>.</p>
        <?php
            the_content();
        ?>
        <div class="tags"><?php the_tags('<span class="tag btn btn-secondary btn-sm">', '</span><span class="tag btn btn-secondary btn-sm mx-1">', '</span>'); ?></div>
    </article>
  </div>
</main>