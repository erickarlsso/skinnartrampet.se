<nav class="navbar is-transparent is-fixed-top" role="navigation">
  <div class="container">

    <div class="navbar-brand">
      <a class="navbar-logo" href="{{ home_url('/') }}">
        <img src="@asset('images/skinnartrampet-logotype_normal.svg')" alt="{{ get_bloginfo('name', 'display') }}">
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="js-navigation">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="js-navigation" class="navbar-menu">
      <div class="navbar-start"></div>

      <div class="navbar-end">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'container' => false,
            'menu_class' => 'navbar-item'
          ]) !!}
        @endif
      </div>
    </div>

  </div>
</nav>
