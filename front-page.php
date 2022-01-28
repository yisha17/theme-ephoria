
    <?php
    get_header();
    ?>

    
    <?php  get_template_part('template-parts/page/content-frontpage') ?>
    <section class="intro">
      <div class="container">
        
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


    <?php
    get_footer();
    ?>
    