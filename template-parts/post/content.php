
    <!-- Latest Posts -->
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <div class="container">
        <div class="post-single">
          <div class="post-thumbnail">
            <!-- <img src="img/blog-post-3.jpeg" alt="..." class="img-fluid"> -->
            <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
          </div>

          <div class="post-details">
            <div class="post-meta d-flex justify-content-between">
              <div class="category">
                <?php
                # display post categories
                $category = get_the_category($id);
                foreach ($category as $cat) {
                  echo '<a>' . $cat->name . '</a>';
                }
                ?>
              </div>

            </div>
            <h1><?php echo get_the_title(); ?><a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
            <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                <div class="avatar">
                  <?php
                  $get_author_id = get_the_author_meta('ID');
                  $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));

                  if (has_post_thumbnail()) {
                    the_post_thumbnail();
                  } else {
                    echo '<img src="' . $get_author_gravatar . '" alt="' . get_the_title() . '" />';
                  }
                  ?>
                </div>
                <div class="title"><span><?php echo get_the_author_meta('display_name'); ?></span></div>
              </a>
              <div class="d-flex align-items-center flex-wrap">
                <div class="date"><i class="icon-clock"></i> <?php the_date(); ?></div>
                <div class="views"><i class="icon-eye"></i><?php gt_get_post_view(); ?></div>
                <div class="comments meta-last"><i class="icon-comment"></i><?php comments_number(); ?></div>
              </div>
            </div>

            <div class="post-body">
              <p class="lead">
                <?php the_content(); ?>

            </div>
            <div class="post-tags">

              <?php
              # add tags to the bottom
              the_tags('', '', '</a>')
              ?>
              <!-- <a href="#" class="tag">#Business</a>
                  <a href="#" class="tag">#Tricks</a>
                  <a href="#" class="tag">#Financial</a>
                  <a href="#" class="tag">#Economy</a> -->
            </div>
            <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row"><a href="<?php echo_next_previous_post_link("link", "previous"); ?>" class="prev-post text-left d-flex align-items-center">
                <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                <div class="text"><strong class="text-primary">Previous Post </strong>
                  <h6><?php echo_next_previous_post_link("title", "previous"); ?></h6>
                </div>
              </a><a href="<?php echo_next_previous_post_link("link", "next"); ?>" class="next-post text-right d-flex align-items-center justify-content-end">
                <div class="text"><strong class="text-primary">Next Post </strong>
                  <h6><?php echo_next_previous_post_link("title", "next"); ?></h6>
                </div>
                <div class="icon next"><i class="fa fa-angle-right"> </i></div>
              </a></div>
            <?php
            comments_template();

            ?>
          </div>
        </div>
      </div>

   
