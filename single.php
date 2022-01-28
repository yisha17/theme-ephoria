
    <?php
    get_header();
    ?>

    
    <section class="intro">
      <div class="container">
        <div class="row">
          
            <main class="post blog-post col-lg-8"> 
              <?php 

                if( have_posts()){

                  while( have_posts()){

                    the_post();
                    gt_set_post_view();
                    
                    get_template_part('template-parts/post/content');
                    
                  }
                }
              
             
              ?>
              </main>
          <?php  get_template_part('sidebar') ?>
         
        </div>
        
      </div>
    </section>
    

    <?php
    get_footer();
    ?>
    