<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="assets/img/profile_image.png" alt class="img-fluid rounded-circle">
      <h1 class="text-light"><a href="index.html">Ahmad Yar</a></h1>
      <p class="text-light text-center">I'm <span class="typed"
          data-typed-items="Software Engineer, Full Stack Developer"></span>
      </p>

      <div class="social-links mt-3 text-center">
        <a href="javascript::void(0)" class="google-plus" title="ahmad.yar@786"><i class="bx bxl-skype"></i></a>
        <a href="https://www.linkedin.com/in/ahmad-yar-9b3627178/" class="linkedin" target="_blank"><i
            class="bx bxl-linkedin"></i></a>
      </div>
    </div>

    <nav id="navbar" class="nav-menu navbar">
      @if (has_nav_menu('primary_navigation'))
        <ul class="navbar-nav "> <!-- Changed from 'me-auto' to 'mx-auto' -->
          {!! wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'items_wrap' => '<ul class="navbar-nav mx-auto">%3$s</ul>',
              'echo' => false
          ]) !!}

        </ul>
      @endif
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->