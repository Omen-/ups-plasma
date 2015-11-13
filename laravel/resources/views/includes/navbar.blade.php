<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Master STP</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/news/">News</a></li>
        <li><a href="/about/">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->first_name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/schedule"><span class="glyphicon glyphicon glyphicon-calendar"></span> Mon planning</a></li>
            <li><a href="/profile"><span class="glyphicon glyphicon glyphicon-user"></span> Gérer mon profil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/logout"><span class="glyphicon glyphicon glyphicon-log-out"></span> Se déconnecter</a></li>
          </ul>
        </li>
        @if(Auth::user()->isAdmin())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administration <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/admin/news">Gérer les news</a></li>
          </ul>
        </li>
        @endif
        @else
        <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
