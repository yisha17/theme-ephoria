<<<<<<< HEAD
 <?php
=======
<?php
>>>>>>> ff6d5c9e4657dea49e6eca2d319af0fc659e21fb
    get_header();
    ?>

    
    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8"> 
          <div class="container">
            <div class="row">
              <?php 

                if( have_posts()){

                  while( have_posts()){

                    the_post();
                    
                    get_template_part('template-parts/post/content-archive');
                    
                  }
                }
              
              
              ?>
          </div>
        </div>
              </main>
      </div>
      </div>
    

    <?php
    get_footer();
    ?>