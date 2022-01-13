
    <?php
    get_header();
    ?>

    
    <section class="intro">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <?php 

                if( have_posts()){

                  while( have_posts()){

                    the_post();
                    gt_set_post_view();
                    get_template_part('template-parts/post/content');

                  }
                }
              
              
              ?>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Page Footer-->

    <?php
    get_footer();
    ?>
    