
<?php if ( has_post_thumbnail() ) :

			$post_thumbnail_id = get_post_thumbnail_id();

			$thumbnail_attributes = wp_get_attachment_image_src( $post_thumbnail_id, 'affinity-featured' );

			//Calculate aspect ratio: h / w * 100%
			$ratio = $thumbnail_attributes[2] / $thumbnail_attributes[1] * 100; ?>
            
            
			

            <section style="background: url(<?php echo esc_url( $thumbnail_attributes[0] ); ?>); background-size: cover; background-position: center center" class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h1> <?php the_title();?></h1><a href="#" class="hero-link">Discover More</a>
          </div>
        </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
      </div>
</section>
		
 <?php endif; ?>
