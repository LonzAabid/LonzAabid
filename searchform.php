<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    
   <button class="search-btn">
    <input type="submit" class="search-submit"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
    <svg class="search-icon" version="1.1" viewBox="0 0 46.553 46.201"><path d="M40.441 45.966 29.506 35.03a19.002 19.002 0 0 1-10.444 3.11C8.522 38.14 0 29.6 0 19.061 0 8.541 8.522-.001 19.062-.001c10.52 0 19.06 8.542 19.06 19.06 0 3.68-1.036 7.108-2.828 10.012l11.013 11.01c.583.568.094 1.982-1.076 3.149l-1.64 1.644c-1.17 1.167-2.584 1.656-3.15 1.09zM31.788 19.06c0-7.033-5.695-12.727-12.727-12.727-7.033 0-12.745 5.694-12.745 12.727s5.712 12.744 12.745 12.744c7.032 0 12.727-5.711 12.727-12.745z"/></svg>
    
</button>
</form>