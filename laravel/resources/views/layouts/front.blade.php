<!DOCTYPE html>
<html>
  @include('includes.head')
  <body class="body">
    @include('includes.navbar-front')
    <!--<header class="container">
      <div class="row">
        <div class="col-xs-12">
          <img width="10%" src="assets/img/header_ups.jpeg"></img>
        </div>
      </div>
    </header>!-->

    <section class="container">
      <div class="banner col-md-12">
        <div class="col-md-8 col-md-offset-1">
          <header class="banner-title-block">
            <h1 class="banner-title">
              {{ get_content('front.title') }}
            </h1>
            <p class="banner-subtitle">{{ get_content('front.subtitle') }}</p>
          </header>
        </div>
        <div class="col-md-3 col-md-offset-9">
          <div class="btn-group-vertical btn-grp-menu" role="group" aria-label="">
              <button type="button" class="btn btn-menu" data-toggle="collapse" data-target="#presentation">Présentation <span class="caret caret-menu"></span></button>
              <div id="presentation" class="collapse collapsable-menu">
                <a href="/a/presentation-local" type="button" class="btn btn-menu-collapse collapsable-menu">Local</a>
                <a href="/a/presentation-international" type="button" class="btn btn-menu-collapse collapsable-menu">International</a>
              </div>
              <a href="/a/plasma" type="button" class="btn btn-menu">Plasma ?</a>
              <a href="/a/debouches" type="button" class="btn btn-menu">Débouchés</a>
              @if(!Auth::check())
              <a href="#" type="button" class="btn btn-menu" data-toggle="modal" data-target="#signup-modal">Inscription</a>
              <a href="#" data-toggle="modal" data-target="#login-modal" type="button" class="btn btn-menu">Connexion</a>
              @else
              <a href="/news" type="button" class="btn btn-menu">Intranet</a>
              @endif
              {{-- @if(Auth::check())
              @if(Auth::user()->isAdmin())
              <div class="btn-banner">
                <a type="button" class="btn btn-primary">Changer l'image</a>
              </div>
              @endif
              @endif --}}
          </div>

        </div>
      </div>
     </div>
    </section>

    @if(!Auth::check())
    @include('includes.modals.login')
    @include('includes.modals.signup')
    @endif
    <section class="container">
      @yield('content')
    </section>

    @include('includes.footer')
  </body>
</html>
