<div class="col-md-4 col-sm-10 py-2 mb-4">
    <div class="card h-100">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="">                             
        <div class="card-body mx-2">
            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
            <p><?php the_excerpt(); ?></p>
            <div class="d-flex justify-content-center mb-2"><a href="<?php the_permalink(); ?>" class="btn btn-secondary read-more">Read More</a></div>
            
        </div>
    </div>
</div>
 

