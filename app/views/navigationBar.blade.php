<header>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
        <div class="nav-collapse">
          <ul id="navi" class="nav">
            <li>
              <a href="{{{ (Route::currentRouteName() == 'home') ? '' : URL::route('home') }}}#about">
                About
              </a>
            </li>
            <li>
              <a href="{{{ (Route::currentRouteName() == 'home') ? '' : URL::route('home') }}}#interests">
                Interests
              </a>
            </li>
            <li>
              <a href="{{{ (Route::currentRouteName() == 'home') ? '' : URL::route('home') }}}#contact">
                Contact
              </a>
            </li>
            <li class="{{ (Route::currentRouteName() == 'posts') ? 'active' : '' }}">
              <a href="{{{ (Route::currentRouteName() == 'posts') ? '#list' : URL::route('posts', 'all') }}}">
                Posts
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>
