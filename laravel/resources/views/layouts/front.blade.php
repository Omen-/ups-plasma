<!DOCTYPE html>
<html>
  @include('includes.head')
  <body class="body">
    @include('includes.navbar-front')

    <section class="container">
      <div class="row">
        <div class="banner col-md-12">
          <img class="img-responsive" src="/assets/img/banner.png"></img>
        </div>
      </div>
     </div>
    </section>

    @if(!Auth::check())
    @include('includes.modals.login')
    @include('includes.modals.signup')
    @endif
    <section class="container">
      <div class="row">
        <div class="btn-grp-menu-big">
          <div class="col-md-6 fix-right-padding">
            <div class="btn-group-vertical btn-grp-menu " role="group" aria-label="">
                <div class="btn-menu-container-left">
                  <button type="button" class="btn btn-menu" data-toggle="collapse" data-target="#presentation">Présentation <span class="caret caret-menu"></span></button>
                </div>
                <div id="presentation" class="collapse collapsable-menu-container">
                  <a href="/a/presentation-local" type="button" class="btn btn-menu-collapse collapsable-menu">Local</a>
                  <a href="/a/presentation-international" type="button" class="btn btn-menu-collapse collapsable-menu">International</a>
                </div>
                <div class="btn-menu-container-left">
                  <a href="/a/plasma" type="button" class="btn btn-menu">Plasma ?</a>
                </div>
            </div>
          </div>
          <div class="col-md-6 fix-left-padding">
            <div class="btn-group-vertical btn-grp-menu" role="group" aria-label="">
              <div class="btn-menu-container-right">
                <a href="/a/debouches" type="button" class="btn btn-menu">Débouchés</a>
              </div>
                @if(!Auth::check())
                <div class="btn-menu-container-right">
                  <a href="#" type="button" class="btn btn-menu" data-toggle="modal" data-target="#signup-modal">Inscription</a>
                </div>
                @else
                <div class="btn-menu-container-right">
                  <a href="/news" type="button" class="btn btn-menu">Intranet</a>
                </div>
                @endif
            </div>
          </div>
          @if(!Auth::check())
          <div class="col-md-12">
            <div class="btn-group-vertical btn-grp-menu btn-menu-container-midle" role="group" aria-label="">
              <a href="#" data-toggle="modal" data-target="#login-modal" type="button" class="btn btn-menu">Connexion</a>
            </div>
          </div>
          @endif
        </div>
      </div>
      @yield('content')
    </section>

    @include('includes.footer')
  </body>
</html>
