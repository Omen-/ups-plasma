<div id="front-bootstrap-menu" class="navbar navbar-default navbar-static-top" role="navigation" style="width:100%;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
              <li>
                <a href="/news">News</a>
              </li>
              <li class="{{ Request::is('a/presentation') ? 'active' : '' }}">
                <a href="/a/presentation">Presentation</a>
              </li>
              <li>
                <a href="/a/plasma">Plasma ?</a>
              </li>
              <li>
                <a href="/a/debouches">Débouchés</a>
              </li>
              <li>
                <a target="_blank" href="/about">Plaquette</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              @if(!Auth::check())
              <li>
                <a href="#" data-toggle="modal" data-target="#signup-modal">Candidater</a>

              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#login-modal">Connexion</a>
              </li>
              @else
              <li>
                <a href="/news">Intranet</a>
              </li>
              @endif
            </ul>
        </div>
    </div>
</div>
