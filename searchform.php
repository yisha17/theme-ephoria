<form action="<?php echo esc_url( home_url( '/' ) ); ?>" id='search-form' role="search" class="search-form" method="get">
          <div class="form-group">
            <input type="search" 
            placeholder="<?php esc_attr_e( 'What are you looking for?', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" >
            <button type="submit" class="submit" value="<?php esc_attr_e( 'Search', 'submit button' ) ?>"><i class="icon-search"></i></button>
          </div>
</form>