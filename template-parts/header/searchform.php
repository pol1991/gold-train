<form role="search" method="get" class="search-form d-none d-lg-flex" action="<?php echo home_url( '/' ); ?>">
    <label for="searchField" class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></label>
    <div class="input-group justify-content-lg-end justify-content-center">
      <input type="search" id="searchField" class="search-field"
          placeholder="<?php echo esc_attr_x( 'Szukaj na stronie...', 'placeholder' ) ?>"
          value="<?php echo get_search_query() ?>" name="s"
          title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
      <span class="input-group-btn">
        <button type="submit" class="btn btn-default">
          <?php echo esc_attr_x( 'Search', 'submit button' ) ?>
        </button>
      </span>
    </div>
</form>