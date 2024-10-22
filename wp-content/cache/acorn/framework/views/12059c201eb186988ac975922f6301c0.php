<footer>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-4 col-xs-12 mb-3 mb-md-0 footer_link_list">
            <h2 class="footer_heading">Your Account</h2>
            
            <?php if(has_nav_menu('footer_your_account_menu')): ?>
                <ul class="footer-menu">
                    <?php echo wp_nav_menu([
                        'theme_location' => 'footer_your_account_menu',
                        'items_wrap' => '%3$s',
                        'echo' => false
                    ]); ?>

                </ul>
            <?php endif; ?>
        </div>
        <div class="col-md-12 col-lg-4 col-xs-12 mb-3 mb-md-0 footer_link_list">
            <h2 class="footer_heading">Quick Links</h2>
            <?php if(has_nav_menu('footer_quick_links_menu')): ?>
                <ul class="footer-menu">
                    <?php echo wp_nav_menu([
                        'theme_location' => 'footer_quick_links_menu',
                        'items_wrap' => '%3$s',
                        'echo' => false
                    ]); ?>

                </ul>
            <?php endif; ?>
        </div>
        <div class="col-md-12 col-lg-4 col-xs-12 mb-3 mb-md-0 footer_link_list">
            <h2 class="footer_heading">Contact</h2>
            <ul class="list-unstyled">
                <li>
                    <a href="/support" class="text-dark footer_link">
                        <span><i class="fas fa-phone" style="font-size: 24px;"></i></span>
                        <span >+92-3124264076</span>
                    </a>
                </li>
                <li>
                    <a href="/support" class="text-dark footer_link">
                        <span><i class="fas fa-envelope" style="font-size: 24px;"></i></span>
                        <span >induseshop@gmail.com</span>
                    </a>
             
                </li>
            </ul>
        </div>
    </div>
  
</div>


    <p  class="text-center">&copy; <?php echo e(date('Y')); ?> Ahmad Yar. All rights reserved.</p>
</footer>
<?php /**PATH /var/www/html/wordpress-sage/wp-content/themes/my_portfolio/resources/views/sections/footer.blade.php ENDPATH**/ ?>