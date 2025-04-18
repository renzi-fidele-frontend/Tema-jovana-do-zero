<header class="banner">
  <div class="container align-items-center">
    <a class="brand" href="{{ esc_url(home_url('/')) }}">{{ bloginfo('name') }}</a>
    <nav class="nav-primary">
      <!-- Burger Toggle -->
      <i class="burger-toggle" role="button" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
        </svg>
      </i>
      <!-- Partners -->
      <div class="ami--logo">
        <a href="https://www.ami.swiss/physics/en/groups/smart-energy-materials/" target="_blank">
          <img class="img-fluid" src="{{ get_stylesheet_directory_uri() }}/dist/images/ami.png" alt="">
        </a>
        <a href="https://sites.utu.fi/smat/" target="_blank">
          <img class="img-fluid" src="https://jovanamilic.com/wp-content/uploads/2025/04/logo.png">
        </a>
      </div>
    </nav>
    <!-- Offcanvas -->
    <div class="offcanvas">
      <div class="offcanvas-header">
        <i role="button" class="btn-close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
          </svg></i>
      </div>
      <!-- Mobile Nav -->
      <div class="offcanvas-body h-100">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        @endif
      </div>
    </div>
  </div>
</header>