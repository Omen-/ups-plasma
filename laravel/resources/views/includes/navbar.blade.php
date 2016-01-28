<nav class="navbar navbar-custom navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <span class="hidden-xs">Sciences et technologies des plasmas</span>
        <span class="visible-xs-inline">S.T.P</span>
      </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('news') ? 'active' : '' }}"><a href="/news">News</a></li>
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
        @if(Auth::check())
        <li class="dropdown {{ Request::is('calendar') || Request::is('profile') ? 'active' : '' }}">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->first_name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/calendar"><span class="glyphicon glyphicon glyphicon-calendar"></span> Mon planning</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/logout"><span class="glyphicon glyphicon glyphicon-log-out"></span> Se déconnecter</a></li>
          </ul>
        </li>
        @if(Auth::user()->isAdmin())
        <li class="dropdown {{ Request::is('admin/*') ? 'active' : '' }}">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administration <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/admin/news/create"><i class="fa fa-fw fa-pencil-square-o"></i> Ecrire une news</a></li>
            <li><a href="/admin/news/index"><i class="fa fa-fw fa-cog"></i> Gérer les news</a></li>
            @if(isset($currentNews))
            <li><a href="/admin/news/edit/{{ $currentNews->id }}"><i class="fa fa-fw fa-pencil"></i> Editer cette news</a></li>
            <li><a href="/admin/news/destroy/{{ $currentNews->id }}"><i class="fa fa-fw fa-trash"></i> Supprimer cette news</a></li>
            @endif
            <li role="separator" class="divider"></li>
            <li><a href="/admin/page/create"><i class="fa fa-fw fa-fw fa-file"></i> Ajouter une page</a></li>
            <li><a href="/admin/page/index"><i class="fa fa-fw fa-cog"></i> Gérer les pages</a></li>
            @if(isset($currentPage))
            <li><a href="/admin/page/edit/{{ $currentPage->id }}"><i class="fa fa-fw fa-pencil"></i> Editer cette page</a></li>
            <li><a href="/admin/page/destroy/{{ $currentPage->id }}"><i class="fa fa-fw fa-trash"></i> Supprimer cette page</a></li>
            @endif
            <li role="separator" class="divider"></li>
            <li><a href="/admin/student-app/index"><i class="fa fa-fw fa-user"></i> Gérer les pré-inscriptions</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/admin/user/index"><i class="fa fa-fw fa-user"></i> Gérer les utilisateurs</a></li>
            <li><a href="/admin/training/index"><i class="fa fa-fw fa-graduation-cap"></i> Gérer les promotions</a></li>
            <li><a href="/admin/student/index"><i class="fa fa-fw fa-users"></i> Gérer les étudiants</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/admin/content/index"><i class="fa fa-fw fa-cog"></i> Paramètres globaux</a></li>
          </ul>
        </li>
        @if(isset($currentPage))
        <li><a href="/admin/page/edit/{{ $currentPage->id }}"><i class="fa fa-fw fa-pencil"></i></a></li>
        <li><a data-confirm="la page {{ $currentPage->title }}" href="/admin/page/destroy/{{ $currentPage->id }}"><i class="fa fa-trash"></i></a></li>
        @endif
        @if(isset($currentNews))
        <li><a href="/admin/news/edit/{{ $currentNews->id }}"><i class="fa fa-fw fa-pencil"></i></a></li>
        <li><a data-confirm="la page {{ $currentNews->title }}" href="/admin/news/destroy/{{ $currentNews->id }}"><i class="fa fa-fw fa-trash"></i></a></li>
        @endif
        @endif
        @else
        <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
