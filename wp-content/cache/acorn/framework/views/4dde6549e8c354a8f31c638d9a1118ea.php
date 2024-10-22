<header class="banner">
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo e(home_url('/')); ?>">
        <?php echo $siteName; ?>

      </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php if(has_nav_menu('primary_navigation')): ?>
          <ul class="navbar-nav mx-auto"> <!-- Changed from 'me-auto' to 'mx-auto' -->
            <?php echo wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'items_wrap' => '<ul class="navbar-nav mx-auto">%3$s</ul>', // Update here as well
                'walker' => new Bootstrap_NavWalker(),
                'echo' => false
            ]); ?>

          </ul>
        <?php endif; ?>

        <div class="d-flex text-dark bg-primary"><?php get_search_form(); ?></div>
        
      </div>
    </div>
  </nav>
</header>

<style>
  .banner {
    margin-bottom: 20px; /* Space below the navbar */
  }
</style>
<?php /**PATH /var/www/html/wordpress-sage/wp-content/themes/my_portfolio/resources/views/sections/header.blade.php ENDPATH**/ ?>