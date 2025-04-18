<footer class="footer footer--main">
  <div class="container">
    <div class="row">
      <div class="col-md-5 footer--brand__container">
        <a class="brand" href="{{ esc_url(home_url('/')) }}">{{ bloginfo('name') }}</a>
      </div>
      <div class="col-md-3 footer--menu">
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation')) : wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav'])
          @endif
        </nav>
      </div>
      <div class="col-md-4 footer--address__container">
        <div class="ami--logo d-none">
          <a href="https://www.ami.swiss/physics/en/groups/smart-energy-materials/" target="_blank">
            <img class="img-fluid" src="{{ get_stylesheet_directory_uri() }}/dist/images/ami.png" alt="">
          </a>
        </div>
        <div class="footer--address">
          <a target="_blank" style="color:white" href="https://www.ami.swiss/physics/en/groups/smart-energy-materials/">Smart Energy Materials</a> <br>
          Adolphe Merkle Institute <br>
          University of Fribourg <br>
          Switzerland
        </div>
        <div class="footer--address mt-4">
          <a target="_blank" style="color:white" href="https://www.utu.fi/en">University of Turku
          </a> <br>
          Department of Chemistry
          <br>
          FI-20014 Turun yliopisto
          <br>
          Finland
        </div>
      </div>
    </div>
</footer>
<script>
  (function() {
    console.log('loader')
    const preloader = document.querySelector('.preloader');

    const fadeEffect = setInterval(() => {
      if (!preloader.style.opacity) {
        preloader.style.opacity = 1;
      }
      if (preloader.style.opacity > 0) {
        preloader.style.opacity -= 0.1;
      } else {
        clearInterval(fadeEffect);
      }
    }, 200);

    // window.addEventListener('load', fadeEffect);

    // Responsive navbar
    const closeBtn = document.querySelector(".btn-close");
    const openBtn = document.querySelector(".burger-toggle");
    const offcanvas = document.querySelector(".offcanvas");

    function openNav() {
      offcanvas.classList.add("show");
    }

    function closeNav() {
      offcanvas.classList.remove("show");
    }

    openBtn.addEventListener("click", openNav);
    closeBtn.addEventListener("click", closeNav);

  })();
</script>