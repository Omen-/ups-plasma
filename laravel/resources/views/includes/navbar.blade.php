<nav class="navbar navbar-custom navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Master STP</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/news/">News</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informations <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/about"><i class="fa fa-fw fa-file-pdf-o"></i> Présentation du parcours</a></li>

          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->first_name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/calendar"><span class="glyphicon glyphicon glyphicon-calendar"></span> Mon planning</a></li>
            <li><a href="/profile"><span class="glyphicon glyphicon glyphicon-user"></span> Gérer mon profil (WIP)</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/logout"><span class="glyphicon glyphicon glyphicon-log-out"></span> Se déconnecter</a></li>
          </ul>
        </li>
        @if(Auth::user()->isAdmin())
        <li class="dropdown">
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
            <li><a href=""><i class="fa fa-fw fa-graduation-cap"></i> Gérer les promotions (WIP)</a></li>
          </ul>
        </li>
        @if(isset($currentPage))
        <li><a href="/admin/page/edit/{{ $currentPage->id }}"><i class="fa fa-fw fa-pencil"></i></a></li>
        <li><a href="/admin/page/destroy/{{ $currentPage->id }}"><i class="fa fa-trash"></i></a></li>
        @endif
        @if(isset($currentNews))
        <li><a href="/admin/news/edit/{{ $currentNews->id }}"><i class="fa fa-fw fa-pencil"></i></a></li>
        <li><a href="/admin/news/destroy/{{ $currentNews->id }}"><i class="fa fa-fw fa-trash"></i></a></li>
        @endif
        @endif
        @else
        <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
