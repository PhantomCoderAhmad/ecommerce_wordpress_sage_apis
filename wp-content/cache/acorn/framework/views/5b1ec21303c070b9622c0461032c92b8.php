<form role="search" method="get" class="search-form" action="<?php echo e(home_url('/')); ?>">
  <label>
    <span class="sr-only">
      <?php echo e(_x('Search for:', 'label', 'sage')); ?>

    </span>

    <div class="search-container">
      <input
        type="search"
        placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'sage'); ?>"
        value="<?php echo e(get_search_query()); ?>"
        name="s"
        class="search-input"
      >
      <button type="submit" class="search-button">
        <i class="fas fa-search"></i> <!-- Font Awesome search icon -->
      </button>
    </div>
  </label>
</form>
<?php /**PATH /var/www/html/wordpress-sage/wp-content/themes/my_portfolio/resources/views/forms/search.blade.php ENDPATH**/ ?>