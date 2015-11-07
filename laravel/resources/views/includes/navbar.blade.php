<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Master STP</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/news/">News</a></li>
        <li><a href="/schedule/">Planning</a></li>
        <li><a href="/about/">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!--  -->
        @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
        @else
        <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
        @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
