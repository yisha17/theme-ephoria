<div class="post-comments">
                  <header>
                    <h3 class="h6">Post Comments<span class="no-of-comments">(<?php echo get_comments_number() ?>)</span></h3>
                  </header>

                  <?php 
                    if (is_single()):
                  ?>
                  <?php foreach (get_comments() as $comment):  ?>
                  <div class="comment">
                    <div class="comment-header d-flex justify-content-between">
                      <div class="user d-flex align-items-center">
                        <!-- <div class="image"><img src="img/user.svg" alt="..." class="img-fluid rounded-circle"></div> -->
                        <div class="image"><?php echo get_avatar( $comment, 32 ); ?></div>
                        <div class="title"><strong><?php echo $comment->comment_author; ?></strong><span class="date"><?php echo get_comment_date( '', $comment)?></span></div>
                      </div>
                    </div>
                    <div class="comment-body">
                      <p><?php echo $comment->comment_content; ?></p>
                    </div>
                  </div>
                  <?php endforeach ?>
                  <?php endif; ?>
                 
                </div>
                <div class="add-comment">
                  
                  
                  <?php
                   
                  if (comments_open()){
                    comment_form();
                  }
                 
                   ?>
                  
            </div>
               