<div class="container p-4 blog-showcase">
  <div class="card">
    <div class="row g-0">
      <div class="col-md-4 img-container">
        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body pe-md-5">
          <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
          <p class="card-text"><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-sm">Read more</a>
        </div>
      </div>
    </div>
  </div>
</div>

