<div class="post col-xl-6">
  <div class="post-thumbnail"><a href="post.html"><?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?></a></div>
  <div class="post-details">
    <div class="post-meta d-flex justify-content-between">
      <div class="date meta-last"><?php the_date(); ?></div>
      <div class="category">
       <?php
                # display post categories
                $category = get_the_category($id);
                foreach ($category as $cat) {
                  echo '<a>' . $cat->name . '</a>';
                }
                ?>
      </div>
    </div><a href="<?php echo get_the_permalink();  ?>">
      <h3 class="h4"><?php echo get_the_title();  ?></h3></a>
    <p class="text-muted"><?php the_excerpt()?></p>
    <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
        <div class="avatar">
          <?php 
            $get_author_id = get_the_author_meta('ID');
            echo get_avatar( $get_author_id,32)
          ?>
          <img src="img/avatar-3.jpg" alt="..." class="img-fluid">
        </div>
        <div class="title">
          <span><?php echo get_the_author_meta('display_name'); ?></span>
        </div></a>
      <div class="date"><i class="icon-clock"></i><?php echo meks_time_ago()?></div>
      <div class="comments meta-last"><i class="icon-comment"></i><?php echo get_comments_number() ?></div>
    </footer>
  </div>
</div>