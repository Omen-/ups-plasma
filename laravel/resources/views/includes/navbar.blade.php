<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Master STP</a>
    </div>
    @if (Auth::guest())
    <div id="navbar" class="navbar-collapse collapse">
      <form method="post" action="/login" class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" name="email" placeholder="Email" class="form-control" required>
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Password" class="form-control" required>
        </div>
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>
    </div>
    @else
    <div id="navbar" class="navbar-collapse collapse">
      <p class="navbar-text navbar-right"><a href="/profile" class="navbar-link">{{ Auth::user()->student ? Auth::user()->student->first_name : Auth::user()->email }}</a></p>
      <form action="/logout" class="navbar-form navbar-right" role="logout">
        <button type="submit" class="btn btn-default">Logout</button>
      </form>
    </div>
    @endif
  </div>
</nav>
