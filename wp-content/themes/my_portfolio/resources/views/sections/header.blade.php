<header class="banner">
  <nav class="navbar navbar-expand-sm bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ home_url('/') }}">
        {!! $siteName !!}
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @if (has_nav_menu('primary_navigation'))
          <ul class="navbar-nav mx-auto"> <!-- Changed from 'me-auto' to 'mx-auto' -->
            {!! wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'items_wrap' => '<ul class="navbar-nav mx-auto">%3$s</ul>',
                'echo' => false
            ]) !!}

          </ul>
        @endif

        
      </div>
      <div class="d-flex text-dark"><?php get_search_form(); ?></div>

    </div>
  </nav>
</header>