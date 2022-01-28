<aside class="col-lg-4">
      <!-- Widget [Search Bar Widget]-->
      <div class="widget search">
        <header>
          <h3 class="h6">Search the blog</h3>
        </header>
        <!-- <form action="#" class="search-form">
          <div class="form-group">
            <input type="search" placeholder="What are you looking for?">
            <button type="submit" class="submit"><i class="icon-search"></i></button>
          </div>
        </form> -->
        <?php get_search_form() ?>
      </div>
      <!-- Widget [Latest Posts Widget]        -->
      <div class="widget latest-posts">
        <header>
          <h3 class="h6">Latest Posts</h3>
        </header>
        <div class="blog-posts">
          <!-- <a href="#">
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="img/small-thumbnail-1.jpg" alt="..." class="img-fluid"></div>
                  <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                    <div class="d-flex align-items-center">
                      <div class="views"><i class="icon-eye"></i> 500</div>
                      <div class="comments"><i class="icon-comment"></i>12</div>
                    </div>
                  </div>
                </div>
              </a> -->
          <?php #echo do_shortcode('[lastest-post]'); 
          $args = array(
        'posts_per_page' => 3, /* how many post you need to display */
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post', /* your post type name */
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="item d-flex align-items-center">
                        <div class="image">
                           <?php
                           if(has_post_thumbnail()){
                                the_post_thumbnail('thumbnail');
                           }else{
                               $get_author_id = get_the_author_meta('ID');
                                $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
                                echo '<img src="'.$get_author_gravatar.'" alt="'.get_the_title().'" />';
                           }
                                
                            ?>
                            
                        </div>
                        <div class="title"><strong><?php the_title(); ?></strong>
                        <div class="d-flex align-items-center">
                            <div class="views"><i class="icon-eye"></i> <?php echo gt_get_post_view();?></div>
                            <div class="comments"><i class="icon-comment"></i><?php comments_number(); ?></div>
                        </div>
                        </div>
                    </div>
                </a>
            <?php
        endwhile;
    endif;
          
          
          ?>

        </div>
      </div>
      <!-- Widget [Categories Widget]-->
      <div class="widget categories">
        <header>
          <h3 class="h6">Categories</h3>
        </header>
        <?php
        $categories = get_categories('exclude=1&title_li=');
        foreach ($categories as $cat) {
          echo "<div class='item d-flex justify-content-between'><a href=\"" . $cat->category_nicename . "\">" . $cat->cat_name . "</a>
                      <span>" . $cat->category_count . "</span></div>";
        }
        ?>
        <!-- 
            <div class="item d-flex justify-content-between"><a href="#">Growth</a><span>12</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Sales</a><span>8</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Tips</a><span>17</span></div>
            <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div> -->
      </div>
      <!-- Widget [Tags Cloud Widget]-->
      <div class="widget tags">
        <header>
          <h3 class="h6">Tags</h3>
        </header>
        <ul class="list-inline">

          <?php
          $tags = get_tags(array(
            'hide_empty' => false
            ));
         
            foreach ($tags as $tag) {
              echo '<li class="list-inline-item"><a href="#" class="tag">'. $tag->name.'</a></li>';
            }
          
          ?>
          <!-- <li class="list-inline-item"><a href="#" class="tag">#Business</a></li>
          <li class="list-inline-item"><a href="#" class="tag">#Technology</a></li>
          <li class="list-inline-item"><a href="#" class="tag">#Fashion</a></li>
          <li class="list-inline-item"><a href="#" class="tag">#Sports</a></li>
          <li class="list-inline-item"><a href="#" class="tag">#Economy</a></li> -->
        </ul>
      </div>
    </aside>