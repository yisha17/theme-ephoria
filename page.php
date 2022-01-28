<?php
    get_header();
    ?>
     
    
   
    <section class="intro">
      <div class="container-fluid">
        
              <?php 

                if( have_posts()){

                  while( have_posts()){

                    the_post();
                    the_content();

                  }
                }
              
              
              ?>
      </div>
    </section>
    <?php wp_link_pages( $args ); ?>

    <?php
    get_footer();
    ?>
    