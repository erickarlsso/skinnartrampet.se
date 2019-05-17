<nav class="navbar" role="navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{ home_url('/') }}">
      <img src="https://bulma.io/images/bulma-logo.png" alt="{{ get_bloginfo('name', 'display') }}">
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
</nav>
