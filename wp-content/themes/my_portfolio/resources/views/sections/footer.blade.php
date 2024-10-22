<footer class="bg-dark text-white footer-custom-padding">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4 col-xs-12 mb-3 mb-md-0 footer_link_list">
                <h2 class="footer_heading">Your Account</h2>
                
                @if (has_nav_menu('footer_your_account_menu'))
                    <ul class="footer-menu">
                        {!! wp_nav_menu([
                            'theme_location' => 'footer_your_account_menu',
                            'items_wrap' => '%3$s',
                            'echo' => false
                        ]) !!}
                    </ul>
                @endif
            </div>
            <div class="col-md-12 col-lg-4 col-xs-12 mb-3 mb-md-0 footer_link_list">
                <h2 class="footer_heading">Quick Links</h2>
                @if (has_nav_menu('footer_quick_links_menu'))
                    <ul class="footer-menu">
                        {!! wp_nav_menu([
                            'theme_location' => 'footer_quick_links_menu',
                            'items_wrap' => '%3$s',
                            'echo' => false
                        ]) !!}
                    </ul>
                @endif
            </div>
            <div class="col-md-12 col-lg-4 col-xs-12 mb-3 mb-md-0 footer_link_list">
                <h2 class="footer_heading">Contact</h2>
                <ul class="list-unstyled">
                    <li>
                        <a href="/support" class="text-white footer_link">
                            <i class="fa-solid fa-phone text-white"></i>
                            <span >+92-3124264076</span>
                        </a>
                    </li>
                    <li>
                        <a href="/support" class="text-white footer_link">
                            <i class="fa-solid fa-envelope text-white"></i>
                            <span >induseshop@gmail.com</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <p  class="text-center mt-5">&copy; {{ date('Y') }} IndusEshop. All rights reserved.</p>
</footer>
