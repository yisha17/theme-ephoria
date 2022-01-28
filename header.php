<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    
    <?php 
    wp_head();
    ?>
  
  </head>
  <body <?php body_class( 'yishak' ); ?>>
   <?php wp_body_open(); ?>
    <header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <?php
             if(function_exists('the_custom_logo')){
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
             }
            ?>
            <img style="height:40px;"class="mb-2 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo" >
            <!-- Navbar Brand --><a href="index.html" class="navbar-brand">
              <?php echo get_bloginfo('name');?> 
            </a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse">

            <?php  

              wp_nav_menu(

                array(
                  'menu' => 'primary',
                  'container' => '',
                  'theme_location' => 'primary',
                  'items_wrap' => '<ul id="" class="navbar-nav ml-auto">%3$s</ul>',
                  'add_li_class'  => 'nav-item',
                  'add_a_class'  => 'nav-link',
                )
              );

            ?>

            <!-- <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.html" class="nav-link active ">Home</a>
              </li>
              <li class="nav-item"><a href="blog.html" class="nav-link ">Blog</a>
              </li>
              <li class="nav-item"><a href="post.html" class="nav-link ">Post</a>
              </li>
              <li class="nav-item"><a href="#" class="nav-link ">Contact</a>
              </li>
            </ul> -->
            <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
            <ul class="langs navbar-text"><a href="#" class="active"> <?php language_attributes(); ?></a><span>  
          </div>
        </div>
      </nav>
    </header>