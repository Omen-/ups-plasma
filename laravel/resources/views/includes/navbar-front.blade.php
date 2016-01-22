<div id="front-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
              <span class="hidden-xs">Science et technologie des plasmas</span>
              <span class="visible-xs-inline">S.T.P</span>
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Présentation <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/a/presentation-local"><i class="fa fa-fw fa-map-marker"></i> Local</a></li>
                  <li><a href="/a/presentation-international"><i class="fa fa-fw fa-globe"></i> International</a></li>
                </ul>
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
                <a href="#" data-toggle="modal" data-target="#signup-modal">Inscription</a>

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
