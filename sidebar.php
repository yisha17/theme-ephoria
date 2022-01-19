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