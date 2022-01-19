<footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo">
              <!-- <h6 class="text-white">Bootstrap Blog</h6> -->
              <?php dynamic_sidebar('logo_title')?>
            </div>
            <div class="contact-details">
              <!-- <p>53 Broadway, Broklyn, NY 11249</p>
              <p>Phone: (020) 123 456 789</p>
              <p>Email: <a href="mailto:info@company.com">Info@Company.com</a></p>
              <ul class="social-menu">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul> -->
              <?php dynamic_sidebar('footer_1')?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="menus d-flex">
              <?php dynamic_sidebar('footer_2')?>
            </div>

            
          </div>
          <div class="col-md-4">
            <div class="latest-posts">
              <!-- <a href="#">
                <div class="post d-flex align-items-center">
                  <div class="image"><img src="wp-content/themes/Ephoria/assets/img/small-thumbnail-1.jpg" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>Hotels for all budgets</strong><span class="date last-meta">October 26, 2016</span></div>
                </div></a><a href="#">
                <div class="post d-flex align-items-center">
                  <div class="image"><img src="wp-content/themes/Ephoria/assets/img/small-thumbnail-2.jpg" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>Great street atrs in London</strong><span class="date last-meta">October 26, 2016</span></div>
                </div></a><a href="#">
                <div class="post d-flex align-items-center">
                  <div class="image"><img src="wp-content/themes/Ephoria/assets/img/small-thumbnail-3.jpg" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>Best coffee shops in Sydney</strong><span class="date last-meta">October 26, 2016</span></div>
                </div></a> -->
              <?php dynamic_sidebar('footer_3') ?>
                
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-6" style="display:inline">
                <span>
                <p>
                <?php dynamic_sidebar('copy_right') ?>
                
                </p>
                </span>
              
            </div>
            <div class="col-md-6 text-right">
              <?php dynamic_sidebar('author') ?>
                <!-- Please do not remove the backlink to Bootstrap Temple unless you purchase an attribution-free license @ Bootstrap Temple or support us at http://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :)                         -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    

    <?php 
    wp_footer();
    ?>
  </body>
</html>