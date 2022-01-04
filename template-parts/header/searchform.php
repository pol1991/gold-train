<form role="search" method="get" class="search-form d-none d-lg-flex" action="<?php echo home_url( '/' ); ?>">
    <label for="searchField" class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></label>
    <div class="input-group justify-content-lg-end justify-content-center">
      <input type="search" id="searchField" class="search-field"
          placeholder="<?php echo esc_attr_x( 'Szukaj na stronie...', 'placeholder' ) ?>"
          value="<?php echo get_search_query() ?>" name="s"
          title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
      <span class="input-group-btn">
        <button type="submit" class="btn btn-default">
        <svg class="text-white invert-class gt-hover" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z"/><?php echo esc_attr_x( 'f002 ', 'submit button' ) ?></svg>
        </button>
      </span>
    </div>
</form>