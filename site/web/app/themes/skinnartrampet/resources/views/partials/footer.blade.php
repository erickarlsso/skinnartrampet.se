<footer class="footer" role="content-info">
  <div class="container">

    <div class="columns is-vcentered">
      <div class="column">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'container' => false,
            'menu_class' => 'footer-menu is-flex'
          ]) !!}
        @endif
      </div>

      <div class="column is-narrow">
        <h4 class="footer-title">Kontakta oss</h4>
        <ul class="footer-contact">
          <li>
            <a href="mailto:info@skinnartrampet.se">
              info@skinnartrampet.se
            </a>
          </li>
          <li>
            <a href="tel:+4670-5483571">
              +46 (0)70-548 3571
            </a>
          </li>
        </ul>
      </div>

      <div class="column">
        <a class="footer-logo" href="{{ home_url('/') }}">
          <img src="@asset('images/skinnartrampet-logotype_normal.svg')" alt="{{ get_bloginfo('name', 'display') }}">
        </a>
      </div>
    </div>

  </div>
</footer>
