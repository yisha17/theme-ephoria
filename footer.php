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

            
          >
      </div>
    </footer>
    

    <?php 
    wp_footer();
    ?>
  </body>
</html>